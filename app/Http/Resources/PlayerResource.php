<?php

namespace App\Http\Resources;

use App\Models\Account;
use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $account =Account::find($this->Account_id);
        $balance=$account->balance;
        return [
            "id"=>$this->id,
            "FullName"=>$this->FullName,
            "Phone"=>$this->Phone,
            "SubscribeDate"=>$this->SubscribeDate,
            "Balance" =>$balance,
        ];
    }
}
