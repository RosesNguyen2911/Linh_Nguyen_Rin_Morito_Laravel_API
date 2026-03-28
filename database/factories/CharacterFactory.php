<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'house' => $this->faker->randomElement([
                'Gryffindor',
                'Slytherin',
                'Ravenclaw',
                'Hufflepuff',
                null
            ]),
            'movie_id' => 1,
            'character_image' => 'default-character.jpg',
        ];
    }
}
