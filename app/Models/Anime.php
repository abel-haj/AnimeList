<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    // renaming primary key name
    protected $primaryKey = 'anime_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'anime_name',
        'anime_image',
        'anime_featured_image',
        'anime_release_date',
        'anime_rating',
        'anime_votes',
    ];
}
