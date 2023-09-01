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

    public function create()
    {
        $categories= Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $categories= Category::all();
         $product = new Product;
         $product-> name_product = $request-> name_product;
         $product-> description = $request-> description;
         $product-> id_category = $request-> id_category;
         $product-> price = $request-> price;
         $product-> picture = $request->picture;
         $product-> save();

        return redirect()->route('products.index');
    }
    public function edit(Product $product)
    {
        $categories= Category::all();
        return view('products.edit', compact('product'));
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


