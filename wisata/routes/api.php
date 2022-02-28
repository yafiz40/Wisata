<?php

use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\DestinationController;
use App\Http\Controllers\api\DistrictController;
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


Route::get('/category', [CategoryController::class, 'category']);
Route::get('/district', [DistrictController::class, 'district']);
Route::get('/destination', [DestinationController::class, 'destination']);
Route::get('/destination/{destination}', [DestinationController::class, 'detailDestination']);
Route::get('/destination/category/{category}', [DestinationController::class, 'categoryDestination']);
