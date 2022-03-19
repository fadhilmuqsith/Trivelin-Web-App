<?php

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

Route::get('/', function () {
    return view('admin_dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/admin', function () {
    return view('admin_dashboard',[
        "title" => "Dashboard"
    ]);
});

Route::get('/admin/register', function () {
    return view('register');
});

Route::get('/admin/login', function () {
    return view('login');
});

Route::get('/admin/order', function () {
    return view('admin_order',[
        "title" => "Order"
    ]);
});
Route::get('/admin/tour', function () {
    return view('admin_tour', [
        "title" => "Tour"
    ]);
});

