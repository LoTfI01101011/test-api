<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\UpdateAvatarController;
use App\Http\Controllers\Api\UpdateBioController;
use App\Http\Controllers\Api\UpdateBirth_dateController;
use App\Http\Controllers\Api\UpdateStateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('auth/register', RegisterController::class);

Route::post('auth/login', LoginController::class);

Route::post('auth/logout', LogoutController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('auth/logout', LogoutController::class);
    // Profile Routes
    Route::post('/profile', [ProfileController::class, 'store']);
    Route::put('/profile/birth_date', UpdateBirth_dateController::class);
    Route::put('/profile/state', UpdateStateController::class);
    Route::put('/profile/avatar', UpdateAvatarController::class);
    Route::put('/profile/bio', UpdateBioController::class);
    // Route::get('/profile/{profile}', [ProfileController::class, 'show']);
});
