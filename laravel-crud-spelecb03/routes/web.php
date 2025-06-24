<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return redirect(route('products')); 
});


Route::resource('products', ProductController::class);

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'registerStore'])->name('register.store');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'authenticate'])->name('login.authenticate');