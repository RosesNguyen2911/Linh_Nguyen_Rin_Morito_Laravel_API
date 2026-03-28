<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Seeder;

/**
 * Class CharacterSeeder
 *
 * Seeder Class that register initial Harry Potter Characters data
 */
class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = [
            // Movie 1
            [
                'name' => 'Harry Potter', 
                'house' => 'Gryffindor', 
                'movie_id' => 1, 
                'character_image' => 'harry.jpg'
            ],
            [
                'name' => 'Hermione Granger', 
                'house' => 'Gryffindor', 
                'movie_id' => 1, 
                'character_image' => 'hermione.jpg'
            ],
            [
                'name' => 'Ron Weasley', 
                'house' => 'Gryffindor', 
                'movie_id' => 1, 
                'character_image' => 'ron.jpg'
            ],
            [
                'name' => 'Draco Malfoy', 
                'house' => 'Slytherin', 
                'movie_id' => 1, 
                'character_image' => 'draco.jpg'
            ],

             // Movie 2
            [
                'name' => 'Ginny Weasley', 
                'house' => 'Gryffindor', 
                'movie_id' => 2, 
                'character_image' => 'ginny.jpg'
            ],
            [
                'name' => 'Lucius Malfoy', 
                'house' => 'Slytherin', 
                'movie_id' => 2, 
                'character_image' => 'lucius.jpg'
            ],
            [
                'name' => 'Gilderoy Lockhart', 
                'house' => 'Ravenclaw', 
                'movie_id' => 2, 
                'character_image' => 'lockhart.jpg'
            ],
            [
                'name' => 'Moaning Myrtle', 
                'house' => 'Ravenclaw', 
                'movie_id' => 2, 
                'character_image' => 'myrtle.jpg'
            ],

            // Movie 3
            [
                'name' => 'Sirius Black', 
                'house' => 'Gryffindor', 
                'movie_id' => 3, 
                'character_image' => 'sirius.jpg'
            ],
            [
                'name' => 'Remus Lupin', 
                'house' => 'Gryffindor', 
                'movie_id' => 3, 
                'character_image' => 'lupin.jpg'
            ],
            [
                'name' => 'Peter Pettigrew', 
                'house' => 'Gryffindor', 
                'movie_id' => 3, 
                'character_image' => 'pettigrew.jpg'
            ],
            [
                'name' => 'Stan Shunpike', 
                'house' => null, 
                'movie_id' => 3, 
                'character_image' => 'stan.jpg'
            ],

            // Movie 4
            [
                'name' => 'Lord Voldemort', 
                'house' => null, 
                'movie_id' => 4, 
                'character_image' => 'voldemort.jpg'
            ],
            [
                'name' => 'Cedric Diggory', 
                'house' => 'Hufflepuff', 
                'movie_id' => 4, 
                'character_image' => 'cedric.jpg'
            ],
            [
                'name' => 'Alastor Moody', 
                'house' => null, 
                'movie_id' => 4, 
                'character_image' => 'alastor.jpg'
            ],
            [
                'name' => 'Cho Chang', 
                'house' => 'Ravenclaw', 
                'movie_id' => 4, 
                'character_image' => 'cho.jpg'
            ],

            // Movie 5
            [
                'name' => 'Luna Lovegood', 
                'house' => 'Ravenclaw', 
                'movie_id' => 5, 
                'character_image' => 'luna.jpg'
            ],
            [
                'name' => 'Bellatrix Lestrange', 
                'house' => 'Slytherin', 
                'movie_id' => 5, 
                'character_image' => 'bellatrix.jpg'
            ],
            [
                'name' => 'Dolores Umbridge', 
                'house' => 'Slytherin', 
                'movie_id' => 5, 
                'character_image' => 'dolores.jpg'
            ],
            [
                'name' => 'Nymphadora Tonks', 
                'house' => 'Hufflepuff', 
                'movie_id' => 5, 
                'character_image' => 'nymphadora.jpg'
            ],

            // Movie 6
            [
                'name' => 'Severus Snape', 
                'house' => 'Slytherin', 
                'movie_id' => 6, 
                'character_image' => 'severus.jpg'
            ],
            [
                'name' => 'Horace Slughorn', 
                'house' => 'Slytherin', 
                'movie_id' => 6, 
                'character_image' => 'horace.jpg'
            ],
            [
                'name' => 'Katie Bell', 
                'house' => 'Gryffindor', 
                'movie_id' => 6, 
                'character_image' => 'katie.jpg'
            ],
            [
                'name' => 'Cormac McLaggen', 
                'house' => 'Gryffindor', 
                'movie_id' => 6, 
                'character_image' => 'cormac.jpg'
            ],

            // Movie 7
            [
                'name' => 'Bill Weasley', 
                'house' => 'Gryffindor', 
                'movie_id' => 7, 
                'character_image' => 'bill.jpg'
            ],
            [
                'name' => 'Griphook', 
                'house' => null, 
                'movie_id' => 7, 
                'character_image' => 'griphook.jpg'
            ],
            [
                'name' => 'Bathilda Bagshot', 
                'house' => null, 
                'movie_id' => 7, 
                'character_image' => 'bathilda.jpg'
            ],
            [
                'name' => 'Dobby', 
                'house' => null, 
                'movie_id' => 7, 
                'character_image' => 'dobby.jpg'
            ],

            // Movie 8
            [
                'name' => 'Neville Longbottom', 
                'house' => 'Gryffindor', 
                'movie_id' => 8, 
                'character_image' => 'neville.jpg'
            ],
            [
                'name' => 'Molly Weasley', 
                'house' => 'Gryffindor', 
                'movie_id' => 8, 
                'character_image' => 'molly.jpg'
            ],
            [
                'name' => 'Nagini', 
                'house' => null, 
                'movie_id' => 8, 
                'character_image' => 'nagini.jpg'
            ],
            [
                'name' => 'Seamus Finnigan', 
                'house' => 'Gryffindor', 
                'movie_id' => 8, 
                'character_image' => 'seamus.jpg'
            ],
        ];

        foreach ($characters as $character) {
            Character::create($character);
        }
     

    }
}
