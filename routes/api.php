<?php

use App\Http\Controllers\ProductBrandController;
use Illuminate\Support\Facades\Route;

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

Route::name('product.')->group(function () {
    Route::prefix('/products')->group(function () {
        Route::get('/brands', [ProductBrandController::class, 'index'])->name('brands');
    });
});
