<?php

namespace App\Http\Controllers;

use App\Models\EstimatedPrice;
use App\Http\Requests\StoreEstimatedPriceRequest;
use App\Http\Requests\UpdateEstimatedPriceRequest;

class EstimatedPriceController extends Controller
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
     * @param  \App\Http\Requests\StoreEstimatedPriceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstimatedPriceRequest $request)
    {
        $estimatedPrice = new EstimatedPrice();
        $estimatedPrice->firstname = $request->input('firstname');
        $estimatedPrice->lastname = $request->input('lastname');
        $estimatedPrice->email = $request->input('email');
        $estimatedPrice->cargotype = $request->input('cargotype');
        $estimatedPrice->countryofOrigin = $request->input('countryoforigin');
        $estimatedPrice->countryofDestination = $request->input('destination');
        $estimatedPrice->quantity = $request->input('quantity');
        $estimatedPrice->weight = $request->input('weight');
        $estimatedPrice->size = $request->input('size');
        
       
        $estimatedPrice->save();
        
        return view('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstimatedPrice  $estimatedPrice
     * @return \Illuminate\Http\Response
     */
    public function show(EstimatedPrice $estimatedPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstimatedPrice  $estimatedPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(EstimatedPrice $estimatedPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstimatedPriceRequest  $request
     * @param  \App\Models\EstimatedPrice  $estimatedPrice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstimatedPriceRequest $request, EstimatedPrice $estimatedPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstimatedPrice  $estimatedPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstimatedPrice $estimatedPrice)
    {
        //
    }
}
