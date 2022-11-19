<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [IndexController::class, 'index'])->name('web.index');
Route::get('/about-us', [IndexController::class, 'about_us'])->name('aboutus');

Route::get('/contact-us', [IndexController::class, 'contact_us'])->name('contactus');
Route::post('send-message', [IndexController::class, 'send_message'])->name('send.message');
Route::post('subscribe', [IndexController::class, 'subscribe'])->name('subscribe');

Route::get('/products', [IndexController::class, 'product'])->name('product');
Route::get('/product-detail/{id}', [IndexController::class, 'product_detail'])->name('product.detail');



Route::group(['middleware' => 'auth'], function()
{
    
    Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
    
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
});


Route::group(['middleware' => 'IsAdmin'], function()
{
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/user-profile', [HomeController::class, 'user_profile'])->name('user.profile');
    Route::post('/update-profile', [HomeController::class, 'update_profile'])->name('update.profile');
    Route::get('/change-password', [HomeController::class, 'change_password'])->name('change.password');
    Route::post('/update-password', [HomeController::class, 'update_password'])->name('update.password');

    Route::get('/attribute/{slug?}',[GenericController::class, 'attribute'])->name('attribute');
    Route::post('/delete-record',[GenericController::class, 'delete_record'])->name('delete.record');
    Route::post('/status-record',[GenericController::class, 'status_record'])->name('status.record');
    Route::post('/add-record/{slug?}',[GenericController::class, 'add_record'])->name('add.record');



    Route::get('web-config', [HomeController::class, 'web_config'])->name('web.config');
    Route::post('update-config', [HomeController::class, 'update_config'])->name('update.config');
    Route::get('web-logo', [HomeController::class, 'web_logo'])->name('web.logo');
    Route::post('update-logo', [HomeController::class, 'update_logo'])->name('update.logo');


    Route::get('confirm-mail', [HomeController::class, 'confirm_mail'])->name('confirm.mail');


});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
