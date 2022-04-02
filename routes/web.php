<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TourController;
use App\Models\Tour;
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
// Route::get('/admin/tour', [TourController::class, 'index'])->middleware('auth');
// Route::get('/admin/tour/create', [TourController::class, 'create'])->middleware('auth');
// Route::post('/admin/tour/create', [TourController::class, 'store']);
// Route::get('/admin/tour/edit/{id}', [TourController::class, 'edit']);


Route::get('/admin', function () {
    return view('admin_dashboard', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');





Route::get('/admin/order', function () {
    return view('admin_order', [
        "title" => "Order"
    ]);
})->middleware('auth');

//ROUTE ADMIN SETTING EDIT, VIEW
// Route::get('/admin/setting', [SettingController::class, 'index'])->name('setting')->middleware('auth');
// Route::patch('/admin/setting', [SettingController::class, 'updatePass']);
Route::get('admin_setting',  [SettingController::class, 'index'])->name('password.form');
Route::post('admin_setting',  [SettingController::class, 'update'])->name('password.update');


//ROUTE ADMIN TOUR ADD, EDIT, VIEW, DELETE
Route::resource('tour', TourController::class)->middleware('auth');


//ROUTE ADMIN REGISTER
Route::get('/admin/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/admin/register', [RegisterController::class, 'createData']);

//ROUTE ADMIN LOGIN & LOGOUT
Route::get('/admin/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin/login', [LoginController::class, 'authenticate']);
Route::post('/admin/logout', [LoginController::class, 'logout']);
