<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BonComController;
use App\Http\Controllers\FactuerController;
use App\Http\Controllers\ListproductController;
use App\Http\Controllers\Api\ApiFactuerController;
use App\Http\Controllers\Api\ApiCustomizeController;
// use Illuminate\Support\Facades\Auth;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Auth::routes();
Route::resource('product', ListproductController::class);

Route::resource('factuer', FactuerController::class);

Route::resource('BonCom', BonComController::class);

route::apiResource('factuers',ApiFactuerController::class);


route::apiResource('customizefile',ApiCustomizeController::class);


