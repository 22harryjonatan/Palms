<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\PriceController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:api')->group(function () {
//     Route::get('/user',function (Request $request) {
//         return $request->user();
//     });

//     // Route::apiResource('posts',PostController::class);
//     Route::post('/logout', [AuthController::class, 'logout']);

// });

// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [AuthController::class, 'register']);

// Route::post('/resend/email/token', [RegisterController::class, 'resendPin'])->name('resendPin');

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');
Route::apiResource('prices',PriceController::class);

Route::middleware('auth:sanctum')->group(function () {

    Route::middleware('verify.api')->group(function () {
        Route::post('/logout', [LoginController::class, 'logout']);
    });
});

Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/verify/pin', [ForgotPasswordController::class, 'verifyPin']);
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword']);

