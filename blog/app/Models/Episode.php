<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $table = 'episodes';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'episode_number', 'tab_name', 'tab_url', 'anime_id'];

    // Relație către modelul Anime
    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
}
