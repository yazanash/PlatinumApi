<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MetricResource extends JsonResource
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

            "player_id"=>$this->player_id,
            "R_Humerus"=>$this->R_Humerus,
            "L_Humerus"=>$this->L_Humerus,
            "R_Arm"=>$this->R_Arm,
            "L_Arm"=>$this->L_Arm,
            "Shoulders"=>$this->Shoulders,
            "Waist"=>$this->Waist,
            "Chest"=>$this->Chest,
            "Hips"=>$this->Hips,
            "R_Thigh"=>$this->R_Thigh,
            "L_Thigh"=>$this->L_Thigh,
            "R_Leg"=>$this->R_Leg,
            "L_Leg"=>$this->L_Leg,
            "Weight"=>$this->Weight,
            "Height"=>$this->Height,
            "Check_Date"=> $this->Check_Date
        ];
    }
}
