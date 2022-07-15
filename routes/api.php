<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('api.json')->group(function () {
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');

    Route::middleware('api.auth')->group(function () {
        Route::prefix('search')->group(function () {
            Route::get('/', [SearchController::class, 'search']);
            Route::get('/tracks', [SearchController::class, 'searchTracks']);
            Route::get('/albums', [SearchController::class, 'searchAlbums']);
            Route::get('/artists', [SearchController::class, 'searchArtists']);
            Route::get('/playlists', [SearchController::class, 'searchPlaylists']);
        });
        Route::prefix('artist')->group(function () {
            Route::get('/{id}', [TrackController::class, 'artist']);
        });
        Route::prefix('playlists')->group(function () {
            Route::get('/', [PlaylistController::class, 'playlists']);
            Route::post('create', [PlaylistController::class, 'create']);
            Route::prefix('{id}')->group(function () {
                Route::get('/', [PlaylistController::class, 'playlist']);
                Route::get('/tracks', [PlaylistController::class, 'playlistTracks']);
                Route::post('edit', [PlaylistController::class, 'edit']);
                Route::post('delete', [PlaylistController::class, 'delete']);
            });
            Route::post('load-tracks', [PlaylistController::class, 'loadTracks']);
            Route::post('add-track', [PlaylistController::class, 'addTrack']);
            Route::post('remove-track', [PlaylistController::class, 'removeTrack']);
        });
        Route::prefix('track')->group(function () {
            Route::get('/{id}', [TrackController::class, 'get']);
        });

        Route::prefix('profile')->group(function () {
            Route::post('edit', [ProfileController::class, 'edit']);

            Route::prefix('{id}')->group(function () {
                Route::get('playlists', [PlaylistController::class, 'playlistsById']);
            });

            Route::post('playlists', [PlaylistController::class, 'create']);
        });

        Route::post('test', [AlbumController::class, 'test']);
    });
});



