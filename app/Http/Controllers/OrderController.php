<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
          $this->middleware('auth')->except('store');
     }

    public function index()
    {
      $recieved = Order::withState('recieved'); //::orderBy('createdAt', 'asc')->get();
      $sent = Order::withState('sent');
      $delivered = Order::withState('delivered');

      return view('order.index', [
        'recieved' => $recieved,
        'sent' => $sent,
        'delivered' => $delivered
      ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $values = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'address' => 'required',
        'number' => 'required',
        'product_id' => 'required|integer'
      ]);
      $values['state'] = "recieved";

      //return $values;

        $order = Order::create($values);

        return view('order.success', ['order' => $order]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
      $order->state = $order->state == 'recieved'? 'sent':'delivered';
      $order->save();
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
