<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


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
         $categories= Category::all();
        $product->update([
        'name_product' => $request-> name_product,
        'description' => $request-> description,
        'id_category' => $request-> id_category,
        'price' => $request-> price,
        'picture' => $request->picture,
        ]);
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


