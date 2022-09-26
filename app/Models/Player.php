<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable=[
        "FullName",
        "Phone" ,
        "GenderMale",
        "Weight",
        "Height",
        "SubscribeDate",
        "SubscribeEndDate",
        "IsTakenContainer",
        "IsSubscribed",
        "Account_id"
    ];
    public function trainings(){
        return $this->hasMany(Training::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function program(){
        return $this->hasMany(Program::class);
    }
    public function metrics(){
        return $this->hasMany(Metric::class);
    }
    public function account(){
        return $this->hasOne(Account::class);
    }
}
