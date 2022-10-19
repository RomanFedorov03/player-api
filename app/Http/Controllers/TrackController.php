<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * @param Request $request
     * @return Builder|Collection|Model|null
     */
    public function artist(Request $request)
    {
        return Artist::query()->with(['albums', 'tracks'])->find($request['id']);
    }

    /**
     * @param Request $request
     * @return Builder|Collection|Model|null
     */
    public function album(Request $request)
    {
        return Album::query()->with(['artist', 'tracks'])->find($request['id']);
    }

    /**
     * @param Request $request
     * @return void
     */
    public function get(Request $request)
    {

    }
}
