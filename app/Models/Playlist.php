<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Playlist extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'photo',
        'private',
    ];

    protected $appends = [
        'photo',
        'edit'
    ];

    /**
     * @return string|null
     */
    public function getPhotoAttribute(): ?string
    {
        return $this->attributes['photo'] ? Storage::url("playlists/{$this->attributes['photo']}") : asset('images/playlist.jpg');
    }

    /**
     * @return int
     */
    public function getEditAttribute(): int
    {
        $auth = Auth::user();
        if ($auth && $this->attributes['user_id'] === $auth->id) {
            return 1;
        }
        return 0;
    }


    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsToMany
     */
    public function tracks(): BelongsToMany
    {
        return $this->belongsToMany(
            Track::class,
            'playlist_track',
            'playlist_id',
            'track_id'
        );
    }
}
