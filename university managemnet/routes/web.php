<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
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
Route::get('/',[PagesController::class,'index'])->name('/');
Route::get('/login',[PagesController::class,'login'])->name('Login');
Route::get('/register',[PagesController::class,'register'])->name('registration');

//students route
Route::get('/student/create',[StudentController::class,'create'])->name('CreateStudent');
Route::get('/student/edit',[StudentController::class,'edit'])->name('EditStudent');
Route::get('/student/get/{id?}/{name?}/{dob?}',[StudentController::class,'get'])->name('GetStudent');
Route::get('/student/list',[StudentController::class,'list'])->name('StudentList');

Route::post('/login',[PagesController::class,'loginsubmit'])->name('login.submit');
Route::post('/register',[PagesController::class,'registersubmit'])->name('register.submit');

//Department route
Route::get('/department/list',[DepartmentController::class,'list'])->name('department.list');
Route::get('/department/details/{id?}',[DepartmentController::class,'details'])->name('department.details');

