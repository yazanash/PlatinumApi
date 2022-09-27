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

