<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
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

// Route::resource('/user', UserController::class);

// Route::get('/user', [UserController::class, 'index'])->name('allUsers');

Route::group(['prefix' => 'user'], function () {
    Route::get('/all', [UserController::class, 'index'])->name('allusers');
    Route::get('/create', [UserController::class, 'create'])->name('createuser');
    Route::post('/save', [UserController::class, 'store'])->name('storeuser');
    Route::get('/show/{slug}', [UserController::class, 'show'])->name('showuser');
    Route::put('/edit/{slug}', [UserController::class, 'edit'])->name('edituser');
});

Route::group(['prefix' => 'admin/order'], function () {
    Route::get('/all', [OrderController::class, 'index'])->name('admin.order.index');
    Route::get('/create', [OrderController::class, 'create'])->name('admin.order.create');
    Route::post('/save', [OrderController::class, 'store'])->name('admin.order.store');
    Route::get('/show/{order}', [OrderController::class, 'show'])->name('admin.order.show');
    Route::get('/edit/{order}', [OrderController::class, 'edit'])->name('admin.order.edit');
    Route::put('/update/{order}', [OrderController::class, 'update'])->name('admin.order.update');
    Route::delete('/destroy/{order}', [OrderController::class, 'destroy'])->name('admin.order.destroy');

});



