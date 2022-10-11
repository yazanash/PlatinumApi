<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable=[
       "name",
       "percent",
       "endDate",
       "subscribeCount",
       "FullPay",
       "isBoth",
       "isTrainer",
       "isGym"
    ];
    function training(){
        $this->hasMany(Training::class);
    }
}
