<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function(){
    Route::post('/newuser','createUser')->name('newuser');
    Route::get('/allusers','indexUser')->name('allusers');
    Route::put('/edituser','editUser')->name('edituser');
    Route::delete('/deleteuser','deleteUser')->name('deleteuser');
    Route::get('/showuser','showUser')->name('showuser');
    
});
