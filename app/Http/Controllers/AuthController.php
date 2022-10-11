<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use HttpResponses;

    public function loginUser(LoginUserRequest $request){
        $request->validated($request->all());
        if (!Auth::attempt(['phone' => $request['phone'],'password' => $request['password']])){
                return $this->error('',"Failed auth",401);
            }
        $user = User::where("phone",$request["phone"])->first();
        $user->Firebase_Token=$request->Token;
        $user->save();
        return $this->success([
            'user'=>$user,
            "token" => $user->createToken("player token")->plainTextToken
        ]);
    }


    public function register(StoreUserRequest $request){
        $request->validated($request->all());

        $user = User::create([
            "email"=>$request->email,
            "phone"=>$request->phone,
            "password"=>Hash::make($request->password),
            "name" => "Player",
            "Firebase_Token"=>$request->Token,
            "player_id" => 15
        ]);

        $SERVER_API_KEY="AAAANtR3W_8:APA91bHhyP-petVns0-iOBeL44PbHor0TdA3c5kyFxiwcWJ6zuLj5UB8NiinmTiSrgnoh6v5dueMCVUgOIdfm0CAiBDel1r_v79iO2154O_w3MHWTDw3Q4NTnBUbr4VPVKtLu0RUpOCX";
       // $token_1="cno7W02dSDaJAtbyzJSte2:APA91bH2JdFpB9ur25nei2CvhchOmk5nm6U2SnUknAyLN-8OnnzGMrc4ZNrB71chIUtB5mQcg_YGI26xDPUrjA4ddBOZepe7bxFa64z4X43fYQ1yCE9DQjzOPYQOO2dwCv4SkciQPvbZ";
        $data =[
           "registration_ids"=>[$user->Firebase_Token],

           "notification" => [
               "title" => "Welcome to platinum gym ",
               "body"=> "Hey Let's start Training",
               "sound"=>"default",
               "image"=>"https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg"]
        ];
        $dataString=json_encode($data);

        $headers=["Authorization: key=".$SERVER_API_KEY,
           "Content-Type: application/json"
       ];

       $ch=curl_init();
       curl_setopt($ch,CURLOPT_URL,'https://fcm.googleapis.com/fcm/send');
       curl_setopt($ch,CURLOPT_POST,true);
       curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
       curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
       curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
       curl_setopt($ch,CURLOPT_POSTFIELDS,$dataString);
       $response= curl_exec($ch);

        return $this->success([
            "user"=>$user,
            "token" => $user->createToken("player token")->plainTextToken
        ],"");
    }
    public function logout(){
        Auth::user()->currentAccessToken()->delete();
        return $this->success([
            "message"=>"Thanks for using our system have a nice day :) "

        ]);
    }
}
