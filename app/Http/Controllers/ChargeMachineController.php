<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChargeMachineRequest;
use App\Http\Requests\UpdateChargeMachineRequest;
use App\Models\ChargeMachine;

class ChargeMachineController extends Controller
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
     * @param  \App\Http\Requests\StoreChargeMachineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChargeMachineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChargeMachine  $chargeMachine
     * @return \Illuminate\Http\Response
     */
    public function show(ChargeMachine $chargeMachine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChargeMachine  $chargeMachine
     * @return \Illuminate\Http\Response
     */
    public function edit(ChargeMachine $chargeMachine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChargeMachineRequest  $request
     * @param  \App\Models\ChargeMachine  $chargeMachine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChargeMachineRequest $request, ChargeMachine $chargeMachine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChargeMachine  $chargeMachine
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChargeMachine $chargeMachine)
    {
        //
    }
}
