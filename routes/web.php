<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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

