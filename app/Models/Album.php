<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
