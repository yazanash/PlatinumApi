<?php

namespace App\Http\Resources;

use App\Models\Offer;
use App\Models\Player;
use App\Models\Sport;
use App\Models\Trainer;
use Illuminate\Http\Resources\Json\JsonResource;

class TrainingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
        "LastCheck"=>$this->LastCheck,
         "player"=>Player::find($this->player_id)->FullName,
         "trainer"=>Trainer::find($this->trainer_id)->FullName,
         "Sport"=>Sport::find($this->Sport_id)->name,
         "rollDate"=>$this->rollDate,
         "Price"=>$this->Price,
         "Offer"=>Offer::find($this->Offer_id)->name,
         "PriceAfterOffer"=>$this->PriceAfterOffer,
        ];
    }
}
