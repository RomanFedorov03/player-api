<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Playlist;
use App\Models\Track;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request['search'];
        $tracks = Track::query()
            ->select(['id', 'artist_id', 'album_id', 'name', 'file', 'id3'])
            ->with(['album:id,photo'])
            ->where('name',  'like', '%' . $search . '%')
            ->take(10)
            ->get();

        $albums = Album::query()
            ->select(['id', 'artist_id', 'name', 'photo'])
            ->with(['artist:id,name,photo'])
            ->where('name',  'like', '%' . $search . '%')
            ->take(10)
            ->get();

        $artists = Artist::query()
            ->where('name',  'like', '%' . $search . '%')
            ->take(10)
            ->get();

        $playlists = Playlist::query()
            ->select(['id', 'user_id', 'name', 'photo'])
            ->where('private', 0)
            ->where('name',  'like', '%' . $search . '%')
            ->take(10)
            ->get();
        return [
            'tracks' => $tracks,
            'albums' => $albums,
            'artists' => $artists,
            'playlists' => $playlists,
        ];
    }

    /**
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function searchTracks(Request $request): LengthAwarePaginator
    {
        return Track::query()
            ->select(['id', 'artist_id', 'album_id', 'name', 'file', 'id3'])
            ->with(['album:id,photo'])
            ->where('name',  'like', '%' . $request['search'] . '%')
            ->paginate(30);
    }

    /**
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function searchAlbums(Request $request): LengthAwarePaginator
    {
        return Album::query()
            ->select(['id', 'artist_id', 'name', 'photo'])
            ->with(['artist:id,name,photo'])
            ->where('name',  'like', '%' . $request['search'] . '%')
            ->paginate(30);
    }

    /**
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function searchArtists(Request $request): LengthAwarePaginator
    {
        return Artist::query()
            ->where('name',  'like', '%' . $request['search'] . '%')
            ->paginate(30);
    }

    /**
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function searchPlaylists(Request $request): LengthAwarePaginator
    {
        return Playlist::query()
            ->select(['id', 'user_id', 'name', 'photo'])
            ->where('private', 0)
            ->where('name',  'like', '%' . $request['search'] . '%')
            ->paginate(30);
    }
}
