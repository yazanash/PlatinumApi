<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlayerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "FullName"=>["required","max:255"],
            "Phone" =>["required","numeric","min:11"],
            "GenderMale"=>["required","boolean"],
            "Weight"=>["required","numeric"],
            "Height"=>["required","numeric"],
            "SubscribeDate"=>["required","date_format:Y-m-d"],
            "SubscribeEndDate"=>["required","date_format:Y-m-d"],
            "IsTakenContainer"=>["required","boolean"],
            "IsSubscribed"=>["required","boolean"],
            "balance"=>["required","numeric"],
        ];
    }
}
