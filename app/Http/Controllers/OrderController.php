<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Status;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::with('status')->get();
        $orders = Order::with('user')->get();
        //$orders = Order::all();
        return view('order.index', compact('orders'));
    }

    public function create(){
        $statuses= Status::all();
        return view('order.create', compact('statuses'));

    }

    public function store(Request $request){
        $statuses= Status::all();
        $order = new Order;
        $order->cost = $request->cost;
        $order->id_user = $request->id_user;
        $order->id_status = $request->id_status;
        $order->created_at = $request->created_at;
        $order->save();

        return redirect()->route('order.index');
    }

    public function edit(Order $order){
        $statuses= Status::all();
         return view ('order.edit', compact('order', 'statuses'));

    }

    public function update(Request $request, Order $order){

        $statuses= Status::all();
        $order->update($request->all());
         return redirect()->route('order.index');

    }

    public function show(Order $order){
        return view('order.show' , compact('order'));

    }

    public function destroy(Order $order){

        $order->delete();
        return redirect()->route('order.index');
    }

};
