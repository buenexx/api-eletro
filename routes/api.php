<?php

use App\Http\Controllers\Brand\BrandCreateController;
use App\Http\Controllers\Product\ProductCreateController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('brand/create', BrandCreateController::class)->name('brand.create');

Route::post('brand/create', ProductCreateController::class)->name('product.create');
