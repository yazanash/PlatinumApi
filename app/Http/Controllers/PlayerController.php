<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Http\Resources\PlayerResource;
use App\Models\Account;
use App\Models\Player;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PlayerResource( Player::find(Auth::user()->player_id));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlayerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlayerRequest $request)
    {
        $request->validated($request->all());

        $player = Player::create([
            "FullName"=>$request->FullName,
            "Phone" =>$request->Phone,
            "GenderMale"=>$request->GenderMale,
            "Weight"=>$request->Weight,
            "Height"=>$request->Height,
            "SubscribeDate"=>$request->SubscribeDate,
            "SubscribeEndDate"=>$request->SubscribeEndDate,
            "IsTakenContainer"=>$request->IsTakenContainer,
            "IsSubscribed"=>$request->IsSubscribed,
            "Account_id"=>Account::create([
                "balance"=>$request->balance,
                "lastCheck"=>$request->SubscribeDate,
            ])->id,
        ]);

        return new PlayerResource($player);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        if(Auth::user()->player_id!==$player->id){
            return $this->error("","You are not authorized",204);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlayerRequest  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlayerRequest $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        //
    }
}
