<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainingDataRequest;
use App\Http\Requests\UpdateTrainingDataRequest;
use App\Models\TrainingData;

class TrainingDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTrainingDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainingDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrainingData  $trainingData
     * @return \Illuminate\Http\Response
     */
    public function show(TrainingData $trainingData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrainingData  $trainingData
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingData $trainingData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrainingDataRequest  $request
     * @param  \App\Models\TrainingData  $trainingData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainingDataRequest $request, TrainingData $trainingData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainingData  $trainingData
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingData $trainingData)
    {
        //
    }
}
