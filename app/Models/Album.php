<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'artist_id',
        'genre_id',
        'cover_image',
        'release_date',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
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

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
