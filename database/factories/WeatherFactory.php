<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WeatherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'rainfall' => $this->faker->numberBetween(0, 75),
            'date' => $this->faker->dateTimeBetween('-2 years', 'now'),
        ];
    }
}
