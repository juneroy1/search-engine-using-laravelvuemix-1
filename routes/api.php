<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ColorController;
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

// api for animal
Route::resource('animals', AnimalController::class);
Route::resource('color', ColorController::class);

Route::post('user', [UserController::class, 'userCreate']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
