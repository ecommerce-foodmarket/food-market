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

   /*
   
   use Illuminate\Http\Request;
use App\Models\Order;

public function pay(Request $request)
{
    // Obtén el valor de $totalPrice desde el formulario
    $totalPrice = $request->input('totalPrice');

    // Aquí debes crear una nueva orden y guardarla en la base de datos
    // Asegúrate de llenar los otros campos de la orden según sea necesario
    $order = new Order;
    $order->cost = $totalPrice;
    $order->id_user = auth()->user()->id; // Asígnale el ID del usuario autenticado
    $order->id_status = 1; // Supongamos que el ID del estado de la orden es 1
    // Llena otros campos de la orden según tu estructura

    $order->save();

    // También debes guardar los productos relacionados con esta orden en la tabla pivot
    // Recorre los productos en el carrito y guarda cada uno en la tabla pivot
    foreach (auth()->user()->cart->products as $product) {
        $order->products()->attach($product->id, ['amount' => $product->pivot->amount]);
    }

    // Luego, puedes redirigir al usuario a una página de confirmación o a donde sea necesario
    return redirect()->route('confirmation');
}
   
   
   */

};
