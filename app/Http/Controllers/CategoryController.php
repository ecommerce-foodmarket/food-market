<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories= Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
         $category = new Category;
         $category-> name_category = $request-> name_category;
         $category-> save();
        return redirect()->route('category.index');
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
{
        $category->update([
        'name_category' => $request->name_category,
    ]);
    
        return redirect()->route('category.index');
}

     public function show(Category $category)
     {
         return view('category.show', compact('category'));
     }
     public function destroy(Category $category)
     {
        $category->delete();
        return redirect()->route('category.index');
     }

}
