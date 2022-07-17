<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoadTracksRequest;
use App\Http\Requests\PlaylistRequest;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Playlist;
use App\Models\PlaylistTrack;
use App\Models\Track;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Owenoj\LaravelGetId3\GetId3;

class PlaylistController extends Controller
{
    /**
     * @param PlaylistRequest $request
     * @return array
     */
    public function create(PlaylistRequest $request): array
    {
        if (isset($request['photo'])) {
            Storage::put("playlists", $request['photo']);
        }

        $playlist = Playlist::create([
            'user_id' => Auth::user()->id,
            'name' => $request['name'],
            'description' => $request['description'],
            'photo' => isset($request['photo']) ? $request['photo']->hashName() : null,
            'private' => $request['private']
        ]);

        return [
            'playlist' => $playlist
        ];
    }

    public function edit(PlaylistRequest $request)
    {
        $playlist = Playlist::find($request['id']);
        if ($playlist && $playlist['user_id'] === Auth::user()->id) {
            if ($request['photo']) {
                Storage::put("playlists/", $request['photo']);
                if ($playlist['photo']) {
                    Storage::delete("playlists/".$playlist['photo']);
                }
                $playlist->update([
                    'photo' => $request['photo']->hashName(),
                ]);
            }
            $playlist->update([
                'user_id' => Auth::user()->id,
                'name' => $request['name'],
                'description' => $request['description'],
                'private' => $request['private']
            ]);

            return [
                'playlist' => $playlist
            ];
        }

        return response()->json([
            'status' => 'error',
        ], 403);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function delete(Request $request): JsonResponse
    {
        $playlist = Playlist::find($request['id']);
        if ($playlist && $playlist['user_id'] === Auth::user()->id) {
            PlaylistTrack::query()->where('playlist_id', $playlist['id'])->delete();
            $playlist->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Плейлист удален!',
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Плейлист не найден!',
        ]);
    }

    /**
     * @return array
     */
    public function playlists(): array
    {
        $playlists = Playlist::query()->paginate(30);

        return [
            'playlists' => $playlists,
        ];
    }

    /**
     * @return array
     */
    public function myPlaylists(): array
    {
//        $user = \auth()->user();
        $playlists = Playlist::query()->where('user_id', \auth()->id())->get();

        return [
            'playlists' => $playlists,
        ];
    }

    /**
     * @param $id
     * @return array
     */
    public function playlistsById($id): array
    {
        $user = User::find($id);

        return [
            'playlists' => $user->playlists,
        ];
    }

    /**
     * @param $id
     * @return Collection|null[]
     */
    public function playlist($id)
    {
        $playlist = Playlist::with(['tracks:id,artist_id,album_id,name,file,id3', 'tracks.album:id,photo'])->select([
            'id',
            'user_id',
            'name',
            'description',
            'photo',
            'private',
        ])->find($id);
        if ($playlist) {
            return collect($playlist)->mapWithKeys(function ($value, $key) use ($playlist) {
                if ($key === 'user_id') {
                    return [
                        'user_id' => $value,
                        'user_name' => $playlist->user['name'],
                    ];
                }
                if ($key === 'tracks') {
                    return [$key => collect($value)->mapWithKeys(function ($item, $key) use ($playlist) {
                        $item['number'] = PlaylistTrack::where('playlist_id', $playlist['id'])->where('track_id', $item['id'])->first()->number;
                        return [$key => $item];
                    })->except('pivot')];
                }
                return [$key => $value];
            });
        }

        return [
            'playlist' => null
        ];
    }

    public function loadTracks(LoadTracksRequest $request)
    {
        $user = Auth::user();
        $playlist = Playlist::find($request['id']);
        if ($playlist && $playlist['user_id'] === $user['id'] && $request['tracks']) {
            foreach ($request['tracks'] as $key => $track) {
                $fileName = $track->getClientOriginalName();
                $fileName = substr($fileName, 0, strrpos($fileName,'.'));
                $id3 = new GetId3($track);
                if ($id3->getArtist()) {
                    $artist = Artist::firstOrCreate(['name' => $id3->getArtist()]);
                    if ($id3->getAlbum()) {
                        $album = Album::firstOrCreate([
                            'artist_id' => $artist['id'],
                            'name' => $id3->getAlbum(),
                            'description' => null,
                        ]);
                        if (is_null($album['photo']) && !is_null($id3->getArtwork(true))) {
                            $album->update([
                                'photo' => $this->saveFile($id3->getArtwork(true), "albums"),
                            ]);
                        }
                    }
                }

                $name = $id3->getArtist() ? $id3->getTitle() : $fileName;
                $track = Track::firstOrCreate([
                    'artist_id' => $artist['id'] ?? null,
                    'album_id' => $album['id'] ?? null,
                    'name' => $name,
                ], [
                    'file' => $this->saveFile($track, "tracks"),
                    'id3' => [
                        'title' => $name,
                        'artist' => $id3->getArtist() ?? null,
                        'getAlbum' => $id3->getAlbum() ?? null,
                        'getGenres' => $id3->getGenres() ?? null,
                        'time' => $id3->getPlaytime(),
                    ]
                ]);

                $playlist->tracks()->detach($track['id']);
                $playlist->tracks()->attach($track['id'], ['number' => $key]);
            }
        }
        return Playlist::with('tracks')->find($playlist['id']);
    }

    private function saveFile($file, $directory)
    {
        if ($file) {
            $file->storeAs(
                $directory,
                $file->getClientOriginalName()
            );
            return $file->getClientOriginalName();
        }
        return null;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function addTrack(Request $request): JsonResponse
    {
        $playlist = Playlist::where('playlist_id', $request['playlistId'])->where('user_id', auth()->id())->first();
        $track = Track::find($request['trackId']);
        if ($playlist && $track) {
            $playlistTracksCount = $playlist->tracks->count();
            if ($playlistTracksCount)
                $playlistTracksCount++;
            PlaylistTrack::query()->firstOrCreate([
                'playlist_id' => $playlist['id'],
                'track_id' => $track['id'],
            ], [
                'number' => $playlistTracksCount
            ]);
            return response()->json([
                'status' => 'success',
            ]);
        }

        return response()->json([
            'status' => 'error',
        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function removeTrack(Request $request): JsonResponse
    {
        $playlist = Playlist::where('user_id',auth()->id())->where('id',$request['playlistId'])->first();
        if ($playlist) {
            PlaylistTrack::query()->where('playlist_id', $playlist['id'])->where('track_id', $request['trackId'])->delete();
            return response()->json([
                'status' => 'success',
            ]);
        }

        return response()->json([
            'status' => 'error',
        ], 400);
    }


    public function playlistTracks(Request $request)
    {
        $playlist = Playlist::find($request['id']);
//        dd($playlist->tracks);
        if ($playlist)
            return $playlist->tracks;
        return response()->json([
            'status' => 'error',
            'message' => 'Плейлит не найден'
        ]);
    }
}
