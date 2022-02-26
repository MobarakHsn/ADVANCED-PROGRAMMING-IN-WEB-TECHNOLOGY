<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;
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
Route::get('/register',[PagesController::class,'register'])->name('registration');


//common routes
Route::get('/',[PagesController::class,'index'])->name('home');
Route::get('/login',[PagesController::class,'login'])->name('Login');
Route::get('/logout',[PagesController::class,'logout'])->name('logout');


//students routes
Route::get('/student/home',[StudentController::class,'home'])->name('student.home');



//teachers routes
Route::get('/teacher/home',[TeacherController::class,'home'])->name('teacher.home');
Route::get('/teacher/ShowStudent/{username?}',[TeacherController::class,'get'])->name('teacher.get');


//admins routes
Route::get('/admin/home',[AdminController::class,'home'])->name('admin.home');


//students route
Route::get('/student/create',[StudentController::class,'create'])->name('CreateStudent');
Route::get('/student/edit',[StudentController::class,'edit'])->name('EditStudent');
Route::get('/student/get/{id?}/{name?}/{dob?}',[StudentController::class,'get'])->name('GetStudent');
Route::get('/student/list',[StudentController::class,'list'])->middleware('auth.user')->name('StudentList');

Route::post('/login',[PagesController::class,'loginsubmit'])->name('login.submit');
Route::post('/register',[PagesController::class,'registersubmit'])->name('register.submit');

//Department route
Route::get('/department/list',[DepartmentController::class,'list'])->middleware('auth.user')->name('department.list');
Route::get('/department/details/{id?}',[DepartmentController::class,'details'])->name('department.details');

