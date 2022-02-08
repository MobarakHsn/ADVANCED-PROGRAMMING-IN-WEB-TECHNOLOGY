<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[ProductController::class,'home'])->name('home');
Route::get('/create',[ProductController::class,'CreateProduct'])->name('create');
Route::get('/edit/{edit_id?}',[ProductController::class,'EditProduct'])->name('edit');
Route::get('/delete',[ProductController::class,'Delete'])->name('delete');
Route::get('/view',[ProductController::class,'ViewProduct'])->name('view');


Route::post('/create',[ProductController::class,'CreateProductValidate'])->name('product.create');
Route::post('/edit/{edit_id?}',[ProductController::class,'EditProductValidate'])->name('product.edit');
Route::post('/delete',[ProductController::class,'DeleteProduct'])->name('product.delete');