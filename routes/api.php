<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CrmController;
use App\Http\Controllers\Api\EodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/login', [AuthController::class, 'login']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/check-otp', [AuthController::class, 'checkOTP']);
Route::post('/change-pass', [AuthController::class, 'changePassword']);

Route::middleware(['jwt.verify'])->group(function () {
    Route::post('activate-account', [AuthController::class, 'activateAccount']);

    Route::get('/crm', [CrmController::class, 'index']);
    Route::get('/eod', [EodController::class, 'index']);
});
