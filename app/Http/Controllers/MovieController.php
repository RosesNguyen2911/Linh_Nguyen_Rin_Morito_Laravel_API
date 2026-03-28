<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

/**
 * Class MovieController
 *
 * Handles retrieving and filtering movie data
 */
class MovieController extends Controller
{
    /**
     * Return a list of movies
     *
     * Query Parameters:
     * - search: Filter by movie title
     * - release_year: Filter by release year
     * - director: Filter by director name
     * 
     * @return array
     */
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $releaseYear = $request->get('release_year', null);
        $director = $request->get('director', '');

        $moviesQuery = Movie::query();

        if (!empty($search)) {
            $moviesQuery->where('title', 'LIKE', '%' . $search . '%');
        }

        if ($releaseYear !== null) {
            $moviesQuery->where('release_year', '=', $releaseYear);
        }

        if (!empty($director)) {
            $moviesQuery->where('director', 'LIKE', '%' . $director . '%');
        }

        $movies = $moviesQuery
            ->orderBy('release_year')
            ->get();

        return $movies;
    }
}
