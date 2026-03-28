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


    /**
     * Show a specific movie
     * 
     * @param Movie $movie
     * @return Movie
     */
    public function show(Movie $movie)
    {
        return $movie;
    }


    /**
     * Store a newly created movie
     *
     * @return Movie
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $releaseYear = $request->input('release_year');
        $director = $request->input('director');
        $movieImage = $request->input('movie_image');

        $movie = Movie::make([
            'title' => $title,
            'description' => $description,
            'release_year' => $releaseYear,
            'director' => $director,
            'movie_image' => $movieImage,
        ]);

        $movie->save();

        return $movie;
    }


    /**
     * Update the specified movie
     * 
     * @param Movie $movie
     * @return Movie
     */
    public function update(Request $request, Movie $movie)
    {
        if ($request->has('title')) {
            $movie->title = $request->input('title');
        }

        if ($request->has('description')) {
            $movie->description = $request->input('description');
        }

        if ($request->has('release_year')) {
            $movie->release_year = $request->input('release_year');
        }

        if ($request->has('director')) {
            $movie->director = $request->input('director');
        }

        if ($request->has('movie_image')) {
            $movie->movie_image = $request->input('movie_image');
        }

        $movie->save();

        return $movie;
    }
    

    /**
     * Remove the specified movie
     *
     * @param Movie $movie
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
    }
}

