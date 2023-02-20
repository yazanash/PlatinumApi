<?php

namespace Database\Seeders;

use App\Models\TrainingData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       TrainingData::factory()->count(10)->create(10);
    }
}
