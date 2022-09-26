<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use HttpResponses;

    public function login(){
        return "Login Method";
    }


    public function register(){
        return response()->json(["Register Method"]) ;

    }
    public function logout(){
        return response()->json(["logout Method"]) ;

    }
}
