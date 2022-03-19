<?php

use App\Exports\ProductsDateExport;
use App\Exports\ProductsExport;
use App\Http\Controllers\ProductControler;
use App\Http\Controllers\ReportController;
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
Route::get('/button-logout', [App\Http\Controllers\HomeController::class, 'buttonlogout'])->name('button.logout');

Route::resource('/products', ProductControler::class)->names('products');
Route::get('/products', [ProductControler::class,'index'])->middleware('can:products.index')->name('products.index');
Route::get('products/create',[ProductControler::class, 'create'])->middleware('can:products.create')->name('products.create');
Route::delete('products/destroy',[ProductControler::class, 'destroy'])->name('products.destroy2');


Route::get('reports/',[ReportController::class,'index'])->middleware('can:reports.index')->name('reports.index');
Route::get('reports/csv/export',[ReportController::class,'export'])->middleware('can:reports.index')->name('reports.export');
Route::post('reports/csv/exportdate',[ReportController::class,'exportdate'])->middleware('can:reports.index')->name('reports.exportdate');
// Route::get('reports/csv/export/dates',[ReportController::class,'dates'])->middleware('can:reports.index')->name('reports.export.dates');

Route::get('reports/csv/export/{date1}/{date2}', function ($date1,$date2){
    return (new ProductsDateExport($date1,$date2))->download('productsDates.csv');
})->name('reports.export.dates');