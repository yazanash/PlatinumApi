<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $player=$this->faker->randomElement(["Yazan","Ammar","Salman","Osama","Sameer"]);
        $name=$this->faker->name();
        return [
            "FullName"=> $name,
            "Phone"=> $this->faker->phoneNumber(),
            "GenderMale"=> true,
            "Weight"=> $this->faker->numberBetween(85,120),
            "Height"=> $this->faker->numberBetween(85,120),
            "SubscribeDate"=> $this->faker->dateTimeThisDecade(),
            "SubscribeEndDate"=>  $this->faker->dateTimeThisDecade(),
            "IsTakenContainer"=> true,
            "IsSubscribed"=> true,
            "Account_id"=>Account::factory(),

        ];
    }
}
