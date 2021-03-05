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

Route::apiResource('feelings', FeelingController::class)->only(['index', 'show']);
Route::apiResource('places', PlaceController::class)->only(['index', 'show']);
Route::apiResource('problems', ProblemController::class)->only(['index', 'show']);