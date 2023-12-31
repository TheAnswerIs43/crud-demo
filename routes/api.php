<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create', [App\Http\Controllers\ApiController::class, 'create']);
Route::get('/read/{id}', [App\Http\Controllers\ApiController::class, 'read']);
Route::post('/update/{id}', [App\Http\Controllers\ApiController::class, 'update']);
Route::delete('/delete/{id}', [App\Http\Controllers\ApiController::class, 'delete']);