<?php

namespace App\Http\Controllers;

use App\Order_detaiil;
use Illuminate\Http\Request;

class OrderDetaiilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view('layout.order_detaiil.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order_detaiil  $order_detaiil
     * @return \Illuminate\Http\Response
     */
    public function show(Order_detaiil $order_detaiil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order_detaiil  $order_detaiil
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_detaiil $order_detaiil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order_detaiil  $order_detaiil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_detaiil $order_detaiil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order_detaiil  $order_detaiil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_detaiil $order_detaiil)
    {
        //
    }
}
