<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return view('products.index', compact('products'));
    }

    public function dashboardCards(){
        $user = auth()->user();
        $products=Product::inRandomOrder()
            ->take(10)
            ->get();

        return view('user.dashboard', compact('user', 'products'));
    }

    public function create()
    {
        $categories= Category::all();
        return view('products.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $categories = Category::all();
        $product = new Product;
        $product->name_product = $request->name_product;
        $product->description = $request->description;
        $product->id_category = $request->id_category;
        $product->price = $request->price;
    
        // Verifica si se ha cargado un archivo antes de intentar obtener sus propiedades
        if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
            $fileName = time() . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('public/images', $fileName);
    
            // Asegúrate de almacenar la ruta completa en la base de datos
            $product->picture = 'storage/images/' . $fileName;
        }
    
        $product->save();
    
        return redirect()->route('products.index');
    }
    
    public function edit(Product $product)
{
    $categories = Category::all();
    return view('products.edit', compact('product', 'categories'));
}
  

public function update(Request $request, Product $product)
{
    $categories = Category::all();

    $request->validate([
        'name_product' => 'required|string|max:255',
        'description' => 'required|string',
        'id_category' => 'required|integer|exists:categories,id',
        'price' => 'required|numeric',
        'new_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de imagen
    ]);

    $product->name_product = $request->name_product;
    $product->description = $request->description;
    $product->id_category = $request->id_category;
    $product->price = $request->price;


    if ($request->hasFile('new_picture') && $request->file('new_picture')->isValid()) {
        if ($product->picture) {
            Storage::delete($product->picture);
        }

        $fileName = time() . '.' . $request->file('new_picture')->getClientOriginalExtension();
        $path = $request->file('new_picture')->storeAs('public/images', $fileName);
        $product->picture = 'storage/images/' . $fileName;
    }

    $product->save();

    return redirect('/products');
}


      public function show(Product $product)
      {
        return view('products.show', compact('product'));
  }


     public function destroy(Product $product)
     {
        $product->delete();
        return redirect()->route('products.index');
     }






    }



