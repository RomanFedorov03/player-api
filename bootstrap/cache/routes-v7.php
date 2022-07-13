<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N3TDfkC3jfsddtaG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/playlists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ly4Og2rHttvaAyf4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/playlists/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GuqgtQkg7D0FTGvZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bsgLmHUKL6vqKfwE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/playlists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QMNMJlR709B3oxHw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LYWdoXDT3so19WAA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/api/p(?|laylists/(?|([^/]++)(?|(*:39)|/edit(*:51))|load\\-tracks(*:71)|add\\-track(*:88)|remove\\-track(*:108))|rofile/([^/]++)/playlists(*:142)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::twD9Jl2xj2NlW62k',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      51 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SwJOzGw3dVvjEaJk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      71 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::81v3S9fWO4hoxqvu',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      88 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pcWoeGE6gNO0PrYs',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HKsGFfMKMXtPBZpY',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CUUS6LsHOPyCYMXA',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::N3TDfkC3jfsddtaG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::N3TDfkC3jfsddtaG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ly4Og2rHttvaAyf4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/playlists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaylistController@playlists',
        'controller' => 'App\\Http\\Controllers\\PlaylistController@playlists',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/playlists',
        'where' => 
        array (
        ),
        'as' => 'generated::Ly4Og2rHttvaAyf4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GuqgtQkg7D0FTGvZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/playlists/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaylistController@create',
        'controller' => 'App\\Http\\Controllers\\PlaylistController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/playlists',
        'where' => 
        array (
        ),
        'as' => 'generated::GuqgtQkg7D0FTGvZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::twD9Jl2xj2NlW62k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/playlists/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaylistController@playlist',
        'controller' => 'App\\Http\\Controllers\\PlaylistController@playlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/playlists/{id}',
        'where' => 
        array (
        ),
        'as' => 'generated::twD9Jl2xj2NlW62k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SwJOzGw3dVvjEaJk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/playlists/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaylistController@edit',
        'controller' => 'App\\Http\\Controllers\\PlaylistController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/playlists/{id}',
        'where' => 
        array (
        ),
        'as' => 'generated::SwJOzGw3dVvjEaJk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::81v3S9fWO4hoxqvu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/playlists/load-tracks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaylistController@loadTracks',
        'controller' => 'App\\Http\\Controllers\\PlaylistController@loadTracks',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/playlists',
        'where' => 
        array (
        ),
        'as' => 'generated::81v3S9fWO4hoxqvu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pcWoeGE6gNO0PrYs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/playlists/add-track',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaylistController@addTrack',
        'controller' => 'App\\Http\\Controllers\\PlaylistController@addTrack',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/playlists',
        'where' => 
        array (
        ),
        'as' => 'generated::pcWoeGE6gNO0PrYs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HKsGFfMKMXtPBZpY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/playlists/remove-track',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaylistController@removeTrack',
        'controller' => 'App\\Http\\Controllers\\PlaylistController@removeTrack',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/playlists',
        'where' => 
        array (
        ),
        'as' => 'generated::HKsGFfMKMXtPBZpY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bsgLmHUKL6vqKfwE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@edit',
        'controller' => 'App\\Http\\Controllers\\ProfileController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::bsgLmHUKL6vqKfwE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CUUS6LsHOPyCYMXA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/profile/{id}/playlists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaylistController@playlistsById',
        'controller' => 'App\\Http\\Controllers\\PlaylistController@playlistsById',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/profile/{id}',
        'where' => 
        array (
        ),
        'as' => 'generated::CUUS6LsHOPyCYMXA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QMNMJlR709B3oxHw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/playlists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PlaylistController@create',
        'controller' => 'App\\Http\\Controllers\\PlaylistController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::QMNMJlR709B3oxHw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LYWdoXDT3so19WAA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\AlbumController@test',
        'controller' => 'App\\Http\\Controllers\\AlbumController@test',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LYWdoXDT3so19WAA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
