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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
     * @return array
     */
    public function playlists(): array
    {
        $user = Auth::user();

        $playlists = Playlist::query()->paginate(10);

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
     * @return \Illuminate\Support\Collection|null[]
     */
    public function playlist($id)
    {
        $playlist = Playlist::with('tracks:id,artist_id,album_id,name,file,id3')->select([
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
//                dd($track);
                $id3 = new GetId3($track);
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

                $track = Track::firstOrCreate([
                    'artist_id' => $artist['id'],
                    'album_id' => $album['id'] ?? null,
                    'name' => $id3->getTitle(),
                ], [
                    'file' => $this->saveFile($track, "tracks"),
                    'id3' => [
                        'title' => $id3->getTitle(),
                        'artist' => $id3->getArtist(),
                        'getAlbum' => $id3->getAlbum(),
                        'getGenres' => $id3->getGenres(),
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
}
