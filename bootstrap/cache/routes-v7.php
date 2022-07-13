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
            '_route' => 'generated::YTIS93GO4MAZ57NF',
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
            '_route' => 'generated::ZDSYhSLz4JAcrSMX',
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
            '_route' => 'generated::VacfhPStzYVUdAj5',
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
            '_route' => 'generated::YE1Ug0BDlDDPYJf4',
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
            '_route' => 'generated::btA0AyEa446WZ1cx',
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
            '_route' => 'generated::yIOC29M3WRYGGeOw',
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
      0 => '{^(?|/api/(?|p(?|laylists/(?|([^/]++)(?|(*:42)|/edit(*:54))|load\\-tracks(*:74)|add\\-track(*:91)|remove\\-track(*:111))|rofile/([^/]++)/playlists(*:145))|track/([^/]++)(*:168)))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nwEf07GBXP79HcBO',
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
      54 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XGbHqIY5MJh5Aj2S',
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
      74 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::54djvaYiT39PD3xI',
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
      91 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ChcUOCRZRS5IxqgV',
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
      111 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R2vOt8P04lwq3ryP',
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
      145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pS8OTCazoHhlfzQY',
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
      ),
      168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::INSNBC9A3PZwl1ma',
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
    'generated::YTIS93GO4MAZ57NF' => 
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
        'as' => 'generated::YTIS93GO4MAZ57NF',
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
    'generated::ZDSYhSLz4JAcrSMX' => 
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
        'as' => 'generated::ZDSYhSLz4JAcrSMX',
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
    'generated::VacfhPStzYVUdAj5' => 
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
        'as' => 'generated::VacfhPStzYVUdAj5',
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
    'generated::nwEf07GBXP79HcBO' => 
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
        'as' => 'generated::nwEf07GBXP79HcBO',
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
    'generated::XGbHqIY5MJh5Aj2S' => 
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
        'as' => 'generated::XGbHqIY5MJh5Aj2S',
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
    'generated::54djvaYiT39PD3xI' => 
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
        'as' => 'generated::54djvaYiT39PD3xI',
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
    'generated::ChcUOCRZRS5IxqgV' => 
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
        'as' => 'generated::ChcUOCRZRS5IxqgV',
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
    'generated::R2vOt8P04lwq3ryP' => 
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
        'as' => 'generated::R2vOt8P04lwq3ryP',
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
    'generated::INSNBC9A3PZwl1ma' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/track/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api.json',
          2 => 'api.auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TrackController@get',
        'controller' => 'App\\Http\\Controllers\\TrackController@get',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/track',
        'where' => 
        array (
        ),
        'as' => 'generated::INSNBC9A3PZwl1ma',
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
    'generated::YE1Ug0BDlDDPYJf4' => 
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
        'as' => 'generated::YE1Ug0BDlDDPYJf4',
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
    'generated::pS8OTCazoHhlfzQY' => 
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
        'as' => 'generated::pS8OTCazoHhlfzQY',
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
    'generated::btA0AyEa446WZ1cx' => 
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
        'as' => 'generated::btA0AyEa446WZ1cx',
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
    'generated::yIOC29M3WRYGGeOw' => 
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
        'as' => 'generated::yIOC29M3WRYGGeOw',
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
