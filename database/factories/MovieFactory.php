<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'release_year' => $this->faker->numberBetween(2001, 2011),
            'director' => $this->faker->name(),
            'movie_image' => 'default-movie.jpg',

        ];
    }
}
