<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;

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



Route::post('admin-login', [ApiController::class, 'admin_login']);
Route::get('product', [IndexController::class, 'page']);
Route::get('product/{id}', [IndexController::class, 'page_detail']);
Route::post('product-create', [IndexController::class, 'product_create']);
Route::get('product-delete/{id}', [IndexController::class, 'product_delete']);

Route::post('subscribe', [ApiController::class, 'subscribe']);
Route::post('message', [ApiController::class, 'message']);
Route::get('get-message', [ApiController::class, 'get_message']);
Route::get('get-subscribe', [ApiController::class, 'get_subscribe']);
Route::get('products', [ApiController::class, 'products']);

Route::get('addtocart', [ApiController::class, 'add_cart']);


Route::post('/login', [ApiController::class, 'login']);
Route::post('/register', [ApiController::class, 'register']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/me', [AuthController::class, 'me']);
    Route::get('/logout',[AuthController::class,'logout']);
});