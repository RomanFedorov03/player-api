<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Playlist;
use App\Models\Track;
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
            ->with(['artist'])
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
}
