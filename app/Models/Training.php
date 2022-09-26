<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    public function player(){
        return $this->belongsTo(Player::class);
    }
    public function sport(){
        return $this->belongsTo(Sport::class);
    }
    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }
    public function offer(){
        return $this->belongsTo(Offer::class);
    }
}
