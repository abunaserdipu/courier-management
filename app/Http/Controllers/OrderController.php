<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Address::get();
        return view('order', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'receiver_name' => 'required',
            'receiver_contact' => 'required',
            'receiver_address' => 'required',
            'sender_name' => 'required',
            'sender_contact' => 'required',
            'sender_address' => 'required',
            'order_type' => 'required',
            'order_weight' => 'required',
            'order_price' => 'required',
            'order_status' => 'order_status',
        ]);
        $order = new Order;
        $order->receiver_name = $request->receiver_name;
        $order->receiver_contact = $request->receiver_contact;
        $order->receiver_address = $request->receiver_address;
        $order->sender_name = $request->sender_name;
        $order->sender_contact = $request->sender_contact;
        $order->sender_contact = $request->sender_contact;
        $order->sender_address = $request->sender_address;
        $order->order_type = $request->order_type;
        $order->order_weight = $request->order_weight;
        $order->order_price = $request->order_price;
        $order->order_status = $request->order_status;
        $order->save();
        return redirect('order')->with('msg', "Product Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
