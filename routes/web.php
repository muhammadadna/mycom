<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseCategoryController;

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
    return view('home', ['title' => 'Home']);
})->name('home');


Route::get('/front', function () {
    return view('index');
});

Route::get('register', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');


// -->>> Sementara ada Home Dan Ada Dashboar nanti dipilih salah satu
// -->>> Atau nanti disesuaikan ketika sudah ada frontend nya :)
Route::get('/home', function () {
    return view('admin/dashboard/index');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('admin/dashboard/index');
})->middleware('auth');

Route::resource('course', CourseController::class)->middleware('auth');
Route::resource('course-category', CourseCategoryController::class)->middleware('auth');

Route::get('/provider', function () {
    return view('admin/provider/index');
})->middleware('auth');


Route::get('/user-management', function () {
    return view('admin/user-management/index');
})->middleware('auth');
