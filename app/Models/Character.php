<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Character Model
 * The class that organize character data
 *
 * Fields:
 * - name: The character's name
 * - house: The Hogwarts house the character belongs to
 * - movie_id: The related movie id
 * - character_image: The character avatar filename
 */
class Character extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'house',
        'movie_id',
        'character_image',
    ];
}