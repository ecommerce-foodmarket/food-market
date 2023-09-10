<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Status;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){

        $orders = Order::all();
        $orders = Order::with('status')->get();
        $orders = Order::with('user')->get();
        return view('admin.order.index', compact('orders'));
    }

    public function create(){
          $statuses= Status::all();
            return view('admin.order.create', compact('statuses'));
        //$orders = Order::all();
    }

    public function store(Request $request){
        $statuses= Status::all();
        $order = new Order;
        $order->cost = $request->cost;
        $order->id_user = $request->id_user;
        $order->id_status = $request->id_status;
        $order->created_at = $request->created_at;
        $order->save();

        return redirect()->route('admin.order.index');
    }

    public function edit(Order $order){

        // $order = Order::find($id);
        $statuses= Status::all();
         return view ('admin.order.edit', compact('order', 'statuses'));

    }

    public function update(Request $request, Order $order){

        $statuses= Status::all();
        $order->update($request->all());
         return redirect()->route('admin.order.index');

    }

    // public function show(Order $order){
    //     return view('admin.order.show' , compact('order'));
    // }





    public function destroy(Order $order){
        $order->delete();
        return redirect()->route('admin.order.index');

    }

    public function destroyUser(Order $order){

        $order->delete();
        return redirect()->route('user.dashboard');
    }
    public function show($order_id){

        $order = Order::with('products')->find($order_id);
        return view ('admin.order.show', ['order'=>$order]);
    }



    public function addToCart(Product $product)
{
    $user = auth()->user();
    $orderInProgress = auth()->user()->orders->where('id_status', 0)->first();


    if (!$orderInProgress) {
        $orderInProgress = new Order;
        $orderInProgress->cost = 0;
        $orderInProgress->id_user = $user->id;
        $orderInProgress->id_status = 0;
        $orderInProgress->save();
    }


    if ($orderInProgress->products->contains($product->id)) {

        $orderInProgress->products()->updateExistingPivot($product->id, ['amount' => DB::raw('amount + 1')]);
    } else {

        $orderInProgress->products()->attach($product->id, ['amount' => 1]);
    }

    return redirect()->route('user.dashboard')->with('success', 'Product added successfully.');
}

public function checkout(Order $order){
    $order->update(['id_status'=>1]);
    return view('cart.complete');
}







}
