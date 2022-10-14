<?php

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return Player::find($request->user()->player_id);
});
Route::post("/register",[App\Http\Controllers\AuthController::class,"register"]);
Route::post("/login",[App\Http\Controllers\AuthController::class,"loginUser"]);
Route::get("/Offers",[App\Http\Controllers\OfferController::class,"index"]);
Route::get("/Sports",[App\Http\Controllers\SportController::class,"index"]);
Route::get("/Trainers",[App\Http\Controllers\TrainerController::class,"index"]);
// Route::get('/send',function(){
//  $SERVER_API_KEY="AAAANtR3W_8:APA91bHhyP-petVns0-iOBeL44PbHor0TdA3c5kyFxiwcWJ6zuLj5UB8NiinmTiSrgnoh6v5dueMCVUgOIdfm0CAiBDel1r_v79iO2154O_w3MHWTDw3Q4NTnBUbr4VPVKtLu0RUpOCX";
//  $token_1="cno7W02dSDaJAtbyzJSte2:APA91bH2JdFpB9ur25nei2CvhchOmk5nm6U2SnUknAyLN-8OnnzGMrc4ZNrB71chIUtB5mQcg_YGI26xDPUrjA4ddBOZepe7bxFa64z4X43fYQ1yCE9DQjzOPYQOO2dwCv4SkciQPvbZ";
//  $data =[
//     "registration_ids"=>[$token_1],

//     "notification" => [
//         "title" => "Welcome to platinum gym ",
//         "body"=> "Hey Let's start Training",
//         "sound"=>"default",
//         "image"=>"https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg"]
//  ];
//  $dataString=json_encode($data);

//  $headers=["Authorization: key=".$SERVER_API_KEY,
//     "Content-Type: application/json"
// ];

// $ch=curl_init();
// curl_setopt($ch,CURLOPT_URL,'https://fcm.googleapis.com/fcm/send');
// curl_setopt($ch,CURLOPT_POST,true);
// curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
// curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
// curl_setopt($ch,CURLOPT_POSTFIELDS,$dataString);
// $response= curl_exec($ch);
// dd($response);

// });

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::resource("Players",App\Http\Controllers\PlayerController::class);
    Route::post("/logout",[App\Http\Controllers\AuthController::class,"logout"]);




    ///Player app routes
    Route::get("/player/view",[App\Http\Controllers\PlayerController::class,"view"]);
    Route::get("/player/training",[App\Http\Controllers\TrainingController::class,"view"]);
    Route::get("/player/payment",[App\Http\Controllers\PaymentController::class,"view"]);
    Route::get("/player/metrics",[App\Http\Controllers\PaymentController::class,"view"]);
    Route::get("/player/program",[App\Http\Controllers\PaymentController::class,"view"]);
 });

