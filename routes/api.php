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

// Window form Api
Route::post('admin-login', [ApiController::class, 'admin_login']);
Route::get('product', [ApiController::class, 'product']);
Route::get('check-api', [ApiController::class, 'Check_api']);
Route::get('product/{id}', [ApiController::class, 'product_detail']);
Route::post('product-create', [ApiController::class, 'product_create']);
Route::get('product-delete/{id}', [ApiController::class, 'product_delete']);
Route::get('get-message', [ApiController::class, 'get_message']);
Route::get('get-subscribe', [ApiController::class, 'get_subscribe']);
Route::get('get-orders', [ApiController::class, 'get_orders']);





// MVC Api
Route::post('subscribe', [ApiController::class, 'subscribe']);
Route::post('message', [ApiController::class, 'message']);
Route::get('products', [ApiController::class, 'products']);



Route::post('/login', [ApiController::class, 'login']);
Route::post('/register', [ApiController::class, 'register']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/me', [AuthController::class, 'me']);
    Route::get('/logout',[AuthController::class,'logout']);
    
    Route::get('cart', [AuthController::class, 'cart']);
    Route::get('addtocart', [AuthController::class, 'add_cart']);
    Route::get('delcart', [AuthController::class, 'del_cart']);

    Route::get('checkout', [AuthController::class, 'checkout']);
    Route::post('place-order', [AuthController::class, 'place_order']);
});