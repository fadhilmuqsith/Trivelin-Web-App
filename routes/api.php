<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiKotaController;
use App\Http\Controllers\API\ApiTourController;
use App\Http\Controllers\API\ApiUserController;
use App\Http\Controllers\API\ApiBookingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('user', [ApiUserController::class, 'fetch']);
});

Route::get('tours',[ApiTourController::class,'all']);
Route::get('cities',[ApiKotaController::class,'all']);
Route::get('orders',[ApiBookingController::class,'all']);
Route::post('orders',[ApiBookingController::class,'update']);
Route::post('checkout', [ApiBookingController::class, 'cretaeOrder']);

Route::post('login', [ApiUserController::class, 'login']);
Route::post('register', [ApiUserController::class, 'register']);
