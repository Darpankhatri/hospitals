<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('product', [IndexController::class, 'page']);
Route::get('product/{id}', [IndexController::class, 'page_detail']);
Route::post('product-create', [IndexController::class, 'product_create']);
Route::get('product-delete/{id}', [IndexController::class, 'product_delete']);
Route::get('auth', [ApiController::class, 'auth_token']);

Route::post('subscribe', [ApiController::class, 'subscribe']);
Route::post('message', [ApiController::class, 'message']);
Route::get('products', [ApiController::class, 'products']);

Route::get('addtocart', [ApiController::class, 'add_cart']);



Route::group(['middleware' => 'auth:api'], function () {
    
});