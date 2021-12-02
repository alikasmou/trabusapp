<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientTypeRequest;
use App\Http\Requests\UpdateClientTypeRequest;
use App\Models\ClientType;

class ClientTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreClientTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientType  $clientType
     * @return \Illuminate\Http\Response
     */
    public function show(ClientType $clientType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientType  $clientType
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientType $clientType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientTypeRequest  $request
     * @param  \App\Models\ClientType  $clientType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientTypeRequest $request, ClientType $clientType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientType  $clientType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientType $clientType)
    {
        //
    }
}
