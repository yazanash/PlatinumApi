<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
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
            "id"=>$this->id,
            "name"=>$this->name,
            "percent"=>$this->percent,
            "endDate"=>$this->endDate,
            "subscribeCount"=>$this->subscribeCount,
            "FullPay"=>$this->FullPay,
            "isBoth"=>$this->isBoth,
            "isTrainer"=>$this->isTrainer,
            "isGym"=>$this->isGym

        ];
    }
}
