<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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

Route::middleware('guest:sanctum')->post('/login', [\App\Http\Controllers\Api\UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/me', [\App\Http\Controllers\Api\UserController::class, 'me']);

    });

    Route::apiResource('/group', \App\Http\Controllers\Api\GroupController::class);
    Route::apiResource('group.deposits', \App\Http\Controllers\Api\DepositController::class)->shallow();
    Route::apiResource('group.loans', \App\Http\Controllers\Api\LoanController::class)->shallow();


});
