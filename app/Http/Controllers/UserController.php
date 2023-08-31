<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $users = User::get();
        return view('user.index', ['users' => $users]);
    }
        
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    
    public function store(Request $request)
    {
        $user_id = DB::table('users')->insertGetId([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'house_n' => $request->input('house_n'),
            'city' => $request->input('city'),
            'id_rol' => $request->input('id_rol'),
            'picture' => $request->input('picture'),
        ]);
       
    
        return redirect()->route('allusers');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        
        return view ('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user_id = User::find($id);
        return view ('user.edit', compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $user_id)
    {
        $user_id = User::find($user_id);
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

        return redirect()->route('allusers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

