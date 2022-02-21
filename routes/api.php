<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PlaylistController;
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
        Route::prefix('playlists')->group(function () {
            Route::get('/', [PlaylistController::class, 'playlists']);
            Route::post('create', [PlaylistController::class, 'create']);
            Route::prefix('{id}')->group(function () {
                Route::get('/', [PlaylistController::class, 'playlist']);
                Route::post('edit', [PlaylistController::class, 'edit']);
            });
            Route::post('load-tracks', [PlaylistController::class, 'loadTracks']);
        });
        Route::prefix('profile')->group(function () {
//            Route::get('/', [PlaylistController::class, 'playlists']);
//            Route::get('/{id}', [PlaylistController::class, 'playlists']);

            Route::prefix('{id}')->group(function () {
//                Route::get('/', [PlaylistController::class, 'playlists']);
                Route::get('playlists', [PlaylistController::class, 'playlistsById']);
            });

            Route::post('playlists', [PlaylistController::class, 'create']);
        });

        Route::post('test', [AlbumController::class, 'test']);
    });
});



