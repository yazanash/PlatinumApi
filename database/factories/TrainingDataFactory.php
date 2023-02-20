<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainingData>
 */
class TrainingDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "program_id"=>Program::factory(),
            "category_id"=>$this->faker->numberBetween(1,7),
            "category"=>$this->faker->name(),
            "training"=>$this->faker->name(),
            "rounds"=>$this->faker->numberBetween(1,3),
            "count"=>$this->faker->numberBetween(8,15)
        ];
    }
}
