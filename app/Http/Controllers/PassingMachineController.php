<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePassingMachineRequest;
use App\Http\Requests\UpdatePassingMachineRequest;
use App\Models\PassingMachine;

class PassingMachineController extends Controller
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
     * @param  \App\Http\Requests\StorePassingMachineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePassingMachineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PassingMachine  $passingMachine
     * @return \Illuminate\Http\Response
     */
    public function show(PassingMachine $passingMachine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PassingMachine  $passingMachine
     * @return \Illuminate\Http\Response
     */
    public function edit(PassingMachine $passingMachine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePassingMachineRequest  $request
     * @param  \App\Models\PassingMachine  $passingMachine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePassingMachineRequest $request, PassingMachine $passingMachine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PassingMachine  $passingMachine
     * @return \Illuminate\Http\Response
     */
    public function destroy(PassingMachine $passingMachine)
    {
        //
    }
}
