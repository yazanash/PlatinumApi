<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use HttpResponses;

    public function login(){
        return "Login Method";
    }


    public function register(StoreUserRequest $request){
        $request->validated($request->all());

        $user = User::create([
            "email"=>$request->email,
            "phone"=>$request->phone,
            "password"=>Hash::make($request->password),
            "name" => "Player"
        ]);
        return $this->success([
            "user"=>$user,
            "token" => $user->createToken("player token")->plainTextToken
        ],"");
    }
    public function logout(){
        return response()->json(["logout Method"]) ;

    }
}
