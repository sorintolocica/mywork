<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $table = 'animes';

    protected $fillable = [
        'title',
        'rating',
        'year',
        'genres',
        'studio',
        'episodes',
        'status',
        'description',
        'image',
    ];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
