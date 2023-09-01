<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    public function create(){
            return view('order.create');
    }

    public function store(Request $request){
        $order = new Order;
        $order->cost = $request->cost;
        $order->id_user = $request->id_user;
        $order->id_status = $request->id_status;
        $order->created_at = $request->created_at	;
        $order->save();

        return redirect()->route('order.index');
    }

    public function edit(Order $order){
        // $order = Order::find($id);
         return view ('order.edit', compact('order')); 

    }

    public function update(Request $request, Order $order){

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
