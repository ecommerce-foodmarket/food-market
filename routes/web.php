<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
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

// Route::get('/user/show/{id}')

Route::get('/products',[ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create',[ProductsController::class, 'create'])->name('products.create');
Route::post('/products/store',[ProductsController::class, 'store'])->name('products.store');
Route::get('/products/edit/{product}',[ProductsController::class, 'edit'])->name('products.edit');
Route::put('/products/update/{product}',[ProductsController::class, 'update'])->name('products.update');
Route::get('/products/show/{product}',[ProductsController::class, 'show'])->name('products.show');
Route::delete('/products/destroy/{product}',[ProductsController::class, 'destroy'])->name('products.destroy');

