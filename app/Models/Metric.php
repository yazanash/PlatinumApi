<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    use HasFactory;
   // protected $fillable=[];

    public function player(){
        return $this->belongsTo(Player::class);
    }
}
