<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrdersProductsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


//RUTAS DE PRODUCTS
Route::group(['prefix' => 'products'], function () {
    Route::get('/',[ProductsController::class, 'index'])->name('products.index');
    Route::get('/create',[ProductsController::class, 'create'])->name('products.create');
    Route::post('/store',[ProductsController::class, 'store'])->name('products.store');
    Route::get('/edit/{product}',[ProductsController::class, 'edit'])->name('products.edit');
    Route::put('/update/{product}',[ProductsController::class, 'update'])->name('products.update');
    Route::get('/show/{product}',[ProductsController::class, 'show'])->name('products.show');
    Route::delete('/destroy/{product}',[ProductsController::class, 'destroy'])->name('products.destroy');
});
//RUTAS DE CATEGORY
Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/save', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/show/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/update/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
});
//RUTAS DE USERS
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::get('show/{user}', [UserController::class, 'show']) ->name('user.show');
    Route::delete('/destroy{user}', [UserController::class, 'destroy']) ->name('user.destroy');
});
//RUTAS DE ROLE
Route::group(['prefix' => 'role'], function () {
    Route::get('/', [RoleController::class, 'index'])->name('role.index');
    Route::get('/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/save', [RoleController::class, 'store'])->name('role.store');
    Route::get('/show/{role}', [RoleController::class, 'show'])->name('role.show');
    Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('role.edit');
    Route::put('/update/{role}', [RoleController::class, 'update'])->name('role.update');
    Route::delete('/destroy/{role}', [RoleController::class, 'destroy'])->name('role.destroy');
});
//RUTAS DE ORDERS
Route::group(['prefix' => 'order'], function () {
    Route::get('/all', [OrderController::class, 'index'])->name('order.index');
    Route::get('/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/save', [OrderController::class, 'store'])->name('order.store');
    Route::get('/show/{order}', [OrderController::class, 'show'])->name('order.show');
    Route::get('/edit/{order}', [OrderController::class, 'edit'])->name('order.edit');
    Route::put('/update/{order}', [OrderController::class, 'update'])->name('order.update');
    Route::delete('/destroy/{order}', [OrderController::class, 'destroy'])->name('order.destroy');
});
//RUTAS DE STATUS
Route::group(['prefix' => 'status'], function () {
    Route::get('/', [StatusController::class, 'index'])->name('status.index');
    Route::get('/create', [StatusController::class, 'create'])->name('status.create');
    Route::post('/save', [StatusController::class, 'store'])->name('status.store');
    Route::get('/show/{status}', [StatusController::class, 'show'])->name('status.show');
    Route::get('/{status}/edit', [StatusController::class, 'edit'])->name('status.edit');
    Route::put('/update/{status}', [StatusController::class, 'update'])->name('status.update');
    Route::delete('/destroy/{status}', [StatusController::class, 'destroy'])->name('status.destroy');
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [OrdersProductsController::class, 'index'])->name('cart.index');
    Route::post('/update', [OrdersProductsController::class, 'update'])->name('cart.update');
    Route::delete('cart/{order}{product}', [OrdersProductsController::class, 'destroy'])->name('cart.destroy');
    Route::get('/empty', [OrdersProductsController::class, 'empty'])->name('cart.empty');
    Route::post('/pay', [OrderController::class, 'pay'])->name('pay');
    // Route::get('/pastorders', [OrdersProductsController::class, 'pastorders'])->name('cart.pastorders');
    Route::get('/confirm', [OrdersProductsController::class, 'confirm'])->name('cart.confirm');

});

// Rutas de autenticación...
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rutas de registro...
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
