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
            return view('admin.order.create');
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

     public function show(Order $order){
         return view('admin.order.show' , compact('order'));
     }

  

    public function destroy(Order $order){
        $order->delete();
        return redirect()->route('admin.order.index');

    }

    public function destroyUser(Order $order){

        $order->delete();
        return redirect()->route('user.dashboard');
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

}




// public function pay(Request $request)
// {
//     // Obtén el valor de $totalPrice desde el formulario
//     $totalPrice = $request->input('totalPrice');

//     // Aquí debes crear una nueva orden y guardarla en la base de datos
//     // Asegúrate de llenar los otros campos de la orden según sea necesario
//     $order = new Order;
//     $order->cost = $totalPrice;
//     $order->id_user = auth()->user()->id; // Asígnale el ID del usuario autenticado
//     $order->id_status = 1; // Supongamos que el ID del estado de la orden es 1
//     // Llena otros campos de la orden según tu estructura

//     $order->save();

//     // También debes guardar los productos relacionados con esta orden en la tabla pivot
//     // Recorre los productos en el carrito y guarda cada uno en la tabla pivot
//     foreach (auth()->user()->cart->products as $product) {
//         $order->products()->attach($product->id, ['amount' => $product->pivot->amount]);
//     }

// };
