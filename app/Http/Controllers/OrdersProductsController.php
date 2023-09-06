<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrdersProductsController extends Controller
{
    public function index()
    {
        $order = Order::with('products')->find(2); 

        if($order){
            return view('cart.index', ['order'=>$order]);
        }else {
            return redirect()->route('cart.empty');
        }

    }

    // public function pastorders(){
    //     $pastOrders = Order::where('id_status', '4')->get();
    //     if($pastOrders->isEmpty()){
    //         return view('cart.index', ['orders'=>$pastOrders, 'pastOrdersView'=>true]);

    //     }else{
    //         return view('cart.index', ['orders'=>$pastOrders, 'pastOrdersView'=>false]);
    //     }
       
    // }

    public function confirm(){
        return "confirma aquí tu pedido";
    }
        
       


        //PARA USUARIOS AUTENTICADOS
        /*
        $user=auth()->user()->id;
        $cart=Product::whereHas ('order, function ($query) use ($user))

        return view ('cart.index', compact('cart'));
        */ 

    

    public function update(Request $request){
        $order = $request->input('order_id');
        $product = $request->input('product_id');
        $increment = $request->input('increment');



        DB::table('order_product')
        ->where('order_id', $order)
        ->where('product_id', $product)
        ->update(['amount'=> DB::raw("amount + $increment")]);

        $newAmount = DB::table('order_product')
        ->where('order_id', $order)
        ->where('product_id', $product)
        ->value('amount');

        if($newAmount <=0){
            DB::table('order_products')
            ->where('order_id', $order)
            ->where('product_id', $product)
            ->delete();
        }

        return redirect()->route('cart.index');

        }

        public function destroy($order_id, $product_id){

           

            DB::table('order_product')
            ->where('order_id', $order_id)
            ->where('product_id', $product_id)
            ->delete();

            return redirect()->route('cart.index');

        }
         
        public function detailOrder(){
            $order = Order::with('products')->find('id'); 
            return view ('admin.order.detail', ['order'=>$order]);
        }
    }

