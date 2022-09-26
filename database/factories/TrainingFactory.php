<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\Player;
use App\Models\Sport;
use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Training>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date=$this->faker->dateTimeThisDecade();
        $price=$this->faker->numberBetween(2000,50000);
        return [
            "LastCheck"=>$date,
            "player_id"=>Player::factory(),
            "Trainer_id"=>Trainer::factory(),
            "Sport_id"=>Sport::factory(),
            "rollDate"=>$date,
            "Price"=>$price,
            "Offer_id"=>Offer::factory(),
            "PriceAfterOffer"=>$price,
            "monthCount"=> $this->faker->numberBetween(1,5),
        ];
    }
}
