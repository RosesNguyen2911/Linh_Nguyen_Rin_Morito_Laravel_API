<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Movie Model
 * The class that organize movie data
 * 
 *  * Fields:
 * - title: The title of the movie
 * - description: A short summary of the movie
 * - release_year: The year the movie was released
 * - director: The director of the movie
 * - movie_image: The poster image filename
 */
class Movie extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'release_year',
        'director',
        'movie_image',
    ];
}
