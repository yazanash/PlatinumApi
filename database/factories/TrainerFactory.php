<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainer>
 */
class TrainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "FullName"=>$this->faker->name(),
            "Phone"=>$this->faker->phoneNumber(),
            "GenderMale"=>$this->faker->boolean(),
            "isActive"=>$this->faker->boolean(),
            "Account_id"=>Account::factory()
        ];
    }
}
