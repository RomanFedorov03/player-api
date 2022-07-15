<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function artist(Request $request)
    {
        return Artist::query()->with(['albums', 'tracks'])->find($request['id']);
    }

    public function get(Request $request)
    {

    }
}
