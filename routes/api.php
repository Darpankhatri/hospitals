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



Route::get('page', [IndexController::class, 'page'])->name('page');
Route::get('auth', [ApiController::class, 'auth_token'])->name('auth.token');

Route::post('subscribe', [ApiController::class, 'subscribe'])->name('subscribe');
Route::post('message', [ApiController::class, 'message'])->name('message');



Route::group(['middleware' => 'auth:api'], function () {
    
});