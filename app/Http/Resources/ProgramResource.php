<?php

namespace App\Http\Resources;

use Database\Factories\TrainingDataFactory;
use Illuminate\Http\Resources\Json\JsonResource;

class ProgramResource extends JsonResource
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
            "program"=>$this->program,
            "sport_id"=>$this->sport_id,
            "trainings"=>TrainingDataResource::collection($this->trainings)
        ];
    }
}
