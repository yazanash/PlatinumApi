<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Metric>
 */
class MetricFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "player_id"=>$this->faker->numberBetween(0,100),
            "R_Humerus"=>$this->faker->numberBetween(0,100),
            "L_Humerus"=>$this->faker->numberBetween(0,100),
            "R_Arm"=>$this->faker->numberBetween(0,100),
            "L_Arm"=>$this->faker->numberBetween(0,100),
            "Shoulders"=>$this->faker->numberBetween(0,100),
            "Waist"=>$this->faker->numberBetween(0,100),
            "Chest"=>$this->faker->numberBetween(0,100),
            "Hips"=>$this->faker->numberBetween(0,100),
            "R_Thigh"=>$this->faker->numberBetween(0,100),
            "L_Thigh"=>$this->faker->numberBetween(0,100),
            "R_Leg"=>$this->faker->numberBetween(0,100),
            "L_Leg"=>$this->faker->numberBetween(0,100),
            "Weight"=>$this->faker->numberBetween(0,100),
            "Height"=>$this->faker->numberBetween(0,100),
            "Check_Date"=> $this->faker->dateTimeThisDecade(),
        ];
    }
}
