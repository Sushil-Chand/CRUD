<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route:: get('/product',[ProductController::class,'index'])->name('product.index');
Route:: get('/product/create',[ProductController::class,'create'])->name('product.create');
Route:: post('/product/store',[ProductController::class,'store'])->name('product.store');

Route:: put('/product/{product}/Update',[ProductController::class,'update'])->name('product.update');
Route:: get('/product{product}/edit',[ProductController::class,'edit'])->name('product.edit');