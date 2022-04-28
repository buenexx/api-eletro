<?php

use App\Http\Controllers\Brand\BrandCreateController;
use App\Http\Controllers\Product\ProductCreateController;
use App\Http\Controllers\Product\ProductShowController;
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

Route::post('brands/create', BrandCreateController::class)->name('brand.create');

Route::prefix('products')->group(function () {
    Route::get('/{product}', ProductShowController::class)->name('product.show');
    Route::post('create', ProductCreateController::class)->name('product.create');
});
