<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
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
        return view ('user.edit', compact('user'));
        
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('user.index');
    }




    public function show($user)
    {
    }

    public function destroy(string $id)
    {

    }
}

