<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sport>
 */
class SportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=> $this->faker->name(),
            "price"=> $this->faker->numberBetween(20000,50000),
            "isActive"=> $this->faker->boolean(),
            "daysInWeek"=> $this->faker->numberBetween(1,6),
            "DailyPrice"=> $this->faker->numberBetween(2000,5000),
            "DaysCount"=> $this->faker->numberBetween(1,30),
        ];
    }
}
