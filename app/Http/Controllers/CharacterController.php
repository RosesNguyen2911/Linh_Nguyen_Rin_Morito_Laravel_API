<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
     /**
     * Return a list of characters
     *
     * Query Parameters:
     * - search: Filter by character name
     * - house: Filter by house
     * - movie_id: Filter by related movie id
     *
     * @return array
     */
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $house = $request->get('house', '');
        $movieId = $request->get('movie_id', null);

        $charactersQuery = Character::query();

        if (!empty($search)) {
            $charactersQuery->where('name', 'LIKE', '%' . $search . '%');
        }

        if (!empty($house)) {
            $charactersQuery->where('house', '=', $house);
        }


        if ($movieId !== null) {
            $charactersQuery->where('movie_id', '=', $movieId);
        }

        $characters = $charactersQuery->get();

        return $characters;
    }

    /**
     * Show a specific character
     *
     * @param Character $character
     * @return Character
     */
    public function show(Character $character)
    {
        return $character;
    }

    /**
     * Store a newly created character
     *
     * @return Character
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $house = $request->input('house');
        $movieId = $request->input('movie_id');
        $characterImage = $request->input('character_image');

        $character = Character::make([
            'name' => $name,
            'house' => $house,
            'movie_id' => $movieId,
            'character_image' => $characterImage,
        ]);

        $character->save();

        return $character;
    }



}
