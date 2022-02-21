<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Owenoj\LaravelGetId3\GetId3;

class AlbumController extends Controller
{
    public function test(Request $request)
    {
        $track = new GetId3(request()->file('track'));
//        // Use static methods:
        $track = GetId3::fromUploadedFile(request()->file('track'));
//        $track = GetId3::fromDiskAndPath('local', '/some/file.mp3');
//        $track = GetId3::fromDiskAndPath('s3', '/some/file.mp3'); // even works with S3

//get all info
//        $track->extractInfo();
//
////get title
//        $track->getTitle();
//
////get playtime
//        $track->getPlaytime();
        return [
            'title' => $track->getTitle(),
            'time' => $track->getPlaytime(),
        ];
//dd($track->getTitle(), $track->getPlaytime());
        return [
            'extractInfo' => $track->extractInfo(),
            'getTitle' => $track->getTitle(),
            'getPlaytime' => $track->getPlaytime(),
        ];
//        dd($request->track);
//        return 1;
    }
}
