<?php

use App\Http\Controllers\ProductControler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/products', ProductControler::class)->names('products');
Route::get('/products', [ProductControler::class,'index'])->middleware('can:products.index')->name('products.index');
Route::get('products/create',[ProductControler::class, 'create'])->middleware('can:products.create')->name('products.create');
Route::delete('products/destroy',[ProductControler::class, 'destroy'])->name('products.destroy2');
