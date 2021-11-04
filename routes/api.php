<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BoldFaceController;
use App\Http\Controllers\Api\CrmController;
use App\Http\Controllers\Api\EetController;
use App\Http\Controllers\Api\EodController;
use App\Http\Controllers\Api\HurtController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\UserController;
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
    Route::get('profile', [UserController::class, 'getProfile']);
    Route::post('profile/update-photo', [UserController::class, 'updatePhotoProfile']);

    Route::post('activate-account', [AuthController::class, 'activateAccount']);

    Route::get('/crm', [CrmController::class, 'index']);
    Route::get('/eod', [EodController::class, 'index']);

    Route::post('/hurt/submit', [HurtController::class, 'submit']);
    Route::get('/hurt/pdf/{hurt}', [HurtController::class, 'downloadPdf']);

    Route::post('/bold-face/series-200', [BoldFaceController::class, 'submitSeries200']);
    Route::post('/bold-face/series-400', [BoldFaceController::class, 'submitSeries400']);
    Route::get('/bold-face/pdf/{boldface}', [BoldFaceController::class, 'downloadPdf']);

    Route::get('/eet/routes-1', [EetController::class, 'getListRoute1']);
    Route::get('/eet/routes-2', [EetController::class, 'getListRoute2']);
    Route::get('/eet/get-route', [EetController::class, 'getRoute']);

    Route::post('broadcast', [MessageController::class, 'broadcast']);
    Route::get('list-messages', [MessageController::class, 'getListMessages']);
    Route::get('read-message/{message}', [MessageController::class, 'readMessage']);
});
