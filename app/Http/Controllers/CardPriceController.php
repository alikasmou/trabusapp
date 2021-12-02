<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardPriceRequest;
use App\Http\Requests\UpdateCardPriceRequest;
use App\Models\CardPrice;

class CardPriceController extends Controller
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
     * @param  \App\Http\Requests\StoreCardPriceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardPriceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardPrice  $cardPrice
     * @return \Illuminate\Http\Response
     */
    public function show(CardPrice $cardPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardPrice  $cardPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(CardPrice $cardPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardPriceRequest  $request
     * @param  \App\Models\CardPrice  $cardPrice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardPriceRequest $request, CardPrice $cardPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardPrice  $cardPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardPrice $cardPrice)
    {
        //
    }
}
