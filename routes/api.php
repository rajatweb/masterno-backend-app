<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StateCityController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\LabController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('states', [StateCityController::class, 'getState']);
Route::get('cities', [StateCityController::class, 'getCity']);


Route::get('provider_group', [ProviderController::class, 'getProviderGroup']);
Route::get('provider_unit', [ProviderController::class, 'getProviderUnit']);
Route::get('timezone', [ProviderController::class, 'getTimezone']);

Route::post('addLab', [LabController::class, 'store']);