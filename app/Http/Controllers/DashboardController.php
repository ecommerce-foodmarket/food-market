<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function redirectToDashboard()
    {
        $user = Auth::user();

        if ($user && $user->id_rol === 3) {
            return redirect()->route('user.dashboard');
        } else {
            return redirect()->route('admin.dashboard'); 
        }
    }
}

