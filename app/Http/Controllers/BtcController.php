<?php

namespace App\Http\Controllers;

use App\Models\Btc;
use Illuminate\Http\Request;

class BtcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $btc = Btc::all();
        // $btcAnterio = 
        return view('historial', ['btc'=> $btc]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $btc = new Btc;
        $btc->currency = $request->currency;
        $btc->rates = $request->rates;
        $btc->save();

        return response()->json($btc, 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Btc  $btc
     * @return \Illuminate\Http\Response
     */
    public function show(Btc $btc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Btc  $btc
     * @return \Illuminate\Http\Response
     */
    public function edit(Btc $btc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Btc  $btc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Btc $btc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Btc  $btc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Btc $btc)
    {
        //
    }
}
