<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task1Controller;

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

Route::get('/homepage',[Task1Controller::class,'course'])->name('course');
Route::get('/contactus',[Task1Controller::class,'contact'])->name('contact');
Route::get('/admin',[Task1Controller::class,'admin'])->name('admin');
Route::get('/student',[Task1Controller::class,'student'])->name('student');
Route::get('/login',[Task1Controller::class,'login'])->name('login');