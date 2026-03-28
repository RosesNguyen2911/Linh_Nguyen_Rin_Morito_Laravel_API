<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;


/**
 * Class MovieSeeder
 *
 * Seeder Class that register initial Harry Potter Movie Series data
 */
class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $movies = [
            [
                'title' => "Harry Potter and the Sorcerer's Stone",
                'description' => 'Harry discovers that he is a wizard and begins his first year at Hogwarts School of Witchcraft and Wizardry.',
                'release_year' => 2001,
                'director' => 'Chris Columbus',
                'movie_image' => 'hp1.jpg',
            ],
            [
                'title' => 'Harry Potter and the Chamber of Secrets',
                'description' => 'Harry returns to Hogwarts for his second year and uncovers the mystery behind a series of attacks at the school.',
                'release_year' => 2002,
                'director' => 'Chris Columbus',
                'movie_image' => 'hp2.jpg',
            ],
            [
                'title' => 'Harry Potter and the Prisoner of Azkaban',
                'description' => 'Harry learns the truth about Sirius Black while facing new dangers during his third year at Hogwarts.',
                'release_year' => 2004,
                'director' => 'Alfonso Cuarón',
                'movie_image' => 'hp3.jpg',
            ],
            [
                'title' => 'Harry Potter and the Goblet of Fire',
                'description' => 'Harry is unexpectedly chosen to compete in the Triwizard Tournament as Voldemort begins to rise again.',
                'release_year' => 2005,
                'director' => 'Mike Newell',
                'movie_image' => 'hp4.jpg',
            ],
            [
                'title' => 'Harry Potter and the Order of the Phoenix',
                'description' => "As the Ministry denies Voldemort's return, Harry and his friends prepare for the growing threat around them.",
                'release_year' => 2007,
                'director' => 'David Yates',
                'movie_image' => 'hp5.jpg',
            ],
            [
                'title' => 'Harry Potter and the Half-Blood Prince',
                'description' => "Harry uncovers more about Voldemort's past while darkness spreads across both the wizarding and Muggle worlds.",
                'release_year' => 2009,
                'director' => 'David Yates',
                'movie_image' => 'hp6.jpg',
            ],
            [
                'title' => 'Harry Potter and the Deathly Hallows - Part 1',
                'description' => 'Harry, Ron, and Hermione leave Hogwarts behind and begin the dangerous mission of finding and destroying Horcruxes.',
                'release_year' => 2010,
                'director' => 'David Yates',
                'movie_image' => 'hp7.jpg',
            ],
            [
                'title' => 'Harry Potter and the Deathly Hallows - Part 2',
                'description' => 'Harry returns to Hogwarts for the final battle against Voldemort and the forces of darkness.',
                'release_year' => 2011,
                'director' => 'David Yates',
                'movie_image' => 'hp8.jpg',
            ],
        ];

         foreach ($movies as $movie) {
            Movie::create($movie);
        }

    }
}
