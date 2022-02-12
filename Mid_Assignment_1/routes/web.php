<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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
Route::get('/login',[CustomerController::class,'LoginView'])->name('loginview');
Route::get('/customer/order',[CustomerController::class,'OrderView'])->name('orderview');
Route::get('/customer/cart',[CustomerController::class,'CartView'])->name('cartview');
Route::get('/customer/checkout',[CustomerController::class,'OrderCheckoutView'])->name('checkoutView');


Route::post('/create',[ProductController::class,'CreateProductValidate'])->name('product.create');
Route::post('/edit/{edit_id?}',[ProductController::class,'EditProductValidate'])->name('product.edit');
Route::post('/delete',[ProductController::class,'DeleteProduct'])->name('product.delete');
Route::post('/login',[CustomerController::class,'LoginControl'])->name('logincontrol');
Route::post('/customer/order',[CustomerController::class,'OrderControl'])->name('ordercontrol');
Route::post('/customer/checkout',[CustomerController::class,'OrderCheckoutControl'])->name('checkoutControl');


