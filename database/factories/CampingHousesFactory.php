<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CampingHousesFactory extends Factory
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
            'peopleAmount' => $this->faker->numberBetween(1,8),
            'under4' => $this->faker->numberBetween(1,2),
            'between4and12' => $this->faker->numberBetween(1,2),
            'between12and18' => $this->faker->numberBetween(1,2),
            'between18and65' => $this->faker->numberBetween(1,2),
            'above65' => $this->faker->numberBetween(1,2),
            'pets' => true,
            'areasize' => $this->faker->numberBetween(50,450),
            'dayPrice' => 30,
            'reserved' => true,
            'arrived' => false,
        ];
    }
}
