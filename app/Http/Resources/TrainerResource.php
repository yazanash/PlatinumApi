<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrainerResource extends JsonResource
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

          "FullName"=>$this->FullName,
          "Phone"=>$this->Phone,
          "GenderMale"=>$this->GenderMale,
          "isActive"=>$this->isActive

        ];
    }
}
