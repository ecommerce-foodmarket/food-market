<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles= Role::all();
        return view('role.index', compact('roles'));
    }

    public function create()
    {
        return view('role.create');
    }

    public function store(Request $request)
    {
         $role = new Role;
         $role-> type = $request-> type;
         $role-> save();
        return redirect()->route('role.index');
    }

    public function edit(Role $role)
    {
        return view('role.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
{
        $role->update([
        'type' => $request->type,
    ]);
    
        return redirect()->route('role.index');
}

     public function show(Role $role)
     {
         return view('role.show', compact('role'));
     }
     public function destroy(Role $role)
     {
        $role->delete();
        return redirect()->route('role.index');
     }
}
