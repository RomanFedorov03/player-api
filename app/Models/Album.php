<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Album extends Model
{
    protected $fillable = [
        'artist_id',
        'name',
        'description',
        'photo',
        'release_date',
    ];

    /**
     * @return string|null
     */
    public function getPhotoAttribute(): ?string
    {
        return $this->attributes['photo'] ? Storage::url("albums/{$this->attributes['photo']}") : asset('images/default_album.gif');
    }

    /**
     * @return BelongsTo
     */
    public function artist(): BelongsTo
    {
        return $this->belongsTo(
            Artist::class,
            'artist_id'
        );
    }
    public function tracks(): HasMany
    {
        return $this->hasMany(
            Track::class
        );
    }
}
