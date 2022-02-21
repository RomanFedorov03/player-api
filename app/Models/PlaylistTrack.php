<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PlaylistTrack extends Model
{
    protected $table = 'playlist_track';

    protected $fillable = [
        'playlist_id',
        'track_id',
        'number'
    ];
}
