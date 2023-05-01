<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'single',
        'artist_id',
        'album_id',
        'music',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function playlists()
    {
        return $this->belongsToMany(Playlist::class)->withTimestamps();
    }

    public function stanzas()
    {
        return $this->hasMany(Stanza::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true,
            ]
        ];
    }
}
