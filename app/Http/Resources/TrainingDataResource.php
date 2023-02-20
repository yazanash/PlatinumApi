<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrainingDataResource extends JsonResource
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
            "program_id"=>$this->program_id,
            "category_id"=>$this->category_id,
            "category"=>$this->category,
            "training"=>$this->training,
            "rounds"=>$this->rounds,
            "count"=>$this->count,
        ];
    }
}
