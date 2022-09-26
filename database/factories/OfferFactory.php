<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "percent"=>$this->faker->numberBetween(1,100),
            "endDate"=>$this->faker->dateTimeThisDecade(),
            "subscribeCount"=>$this->faker->numberBetween(1,12),
            "FullPay"=>$this->faker->boolean(),
            "isBoth"=>$this->faker->boolean(),
            "isTrainer"=>$this->faker->boolean(),
            "isGym"=>$this->faker->boolean(),
        ];
    }
}
