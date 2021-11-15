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
            'director_id' => $this->faker->numberBetween(1, 5),
            'title' => $this->faker->word(),
            'year' => $this->faker->year(),
            'rating' => $this->faker->numberBetween(1, 10)
        ];
    }
}
