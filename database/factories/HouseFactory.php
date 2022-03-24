<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contactPersonFirstName' => $this->faker->firstName(),
            'contactPersonLastName' => $this->faker->lastName(),
            'peopleAmount' => $this->faker->numberBetween(3, 8),
            'under4' => $this->faker->numberBetween(0, 1),
            'between4and12' => $this->faker->numberBetween(0, 2),
            'between12and18' => $this->faker->numberBetween(1, 2),
            'between18and65' => $this->faker->numberBetween(1, 2),
            'above65' => $this->faker->numberBetween(0, 1),
            'pets' => $this->faker->boolean(true),
            'areasize' => $this->faker->numberBetween(40, 200),
            'dayPrice' => 5.50,
            'reserved' => $this->faker->boolean(false),
            'arrived' => $this->faker->boolean(false),

        ];
    }
}
