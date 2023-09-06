<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user_id = new User;
        $user_id->name=$request->name;
        $user_id->email=$request->email;
        $user_id->password=$request->password;
        $user_id->phone=$request->phone;
        $user_id->address=$request->address;
        $user_id->house_n=$request->house_n;
        $user_id->city=$request->city;
        $user_id->id_rol=$request->id_rol;
        $user_id->picture=$request->picture;
        $user_id->save();
        return redirect()->route('user.index');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view ('user.edit', compact('user', 'roles'));

    }

    public function update(Request $request, User $user)
    {
        $roles = Role::all();
        $user->update($request->all());
        return redirect()->route('user.index');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
  

    public function dashboard()
    {
        $user = Auth::user();
        $products = Product::inRandomOrder()
            ->take(5)
            ->get();
    
        $categories = Category::with('products')->get(); // Cargar productos relacionados
    
        if ($user) {
            return view('user.dashboard', compact('user', 'products', 'categories'));
        } else {
            return redirect()->route('login');
        }
    }
    

}

