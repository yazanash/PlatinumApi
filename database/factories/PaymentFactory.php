<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "player_id"=>Player::factory(),
            "PaymentValue"=>$this->faker->numberBetween(2000,50000),
            "des"=>$this->faker->text(),
            "PayDate"=> $this->faker->dateTimeThisDecade(),
        ];
    }
}
