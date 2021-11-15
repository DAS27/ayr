<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GenreMovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'genre_id' => $this->faker->numberBetween(1, 20),
            'movie_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
