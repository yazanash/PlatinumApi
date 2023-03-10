<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    public function player(){
        return $this->hasMany(Player::class);
    }
    public function trainings(){
        return $this->hasMany(TrainingData::class);
    }
}
