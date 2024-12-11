<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;


Route::prefix('1.0')->group(function () {

    // route authentification
    Route::post('auth/register',[UserAuthController::class,'register']);
    Route::post('auth/login',[UserAuthController::class,'login']);
    Route::post('auth/logout',[UserAuthController::class,'logout'])->middleware('auth:sanctum');

    Route::get('/me', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');
});
