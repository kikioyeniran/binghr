<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::post('/user/update/{user}', [UserController::class, 'update'])->name('user.update');

// Route::group(['prefix' => 'orders'], function () {
//     Route::post('create', [OrderController::class, 'order'])->name('api.orders.create');
//     Route::get('get-user-orders', [OrderController::class, 'get_auth_user_orders'])->name('api.orders.get-user-orders');
//     Route::get('get-order-by-id/{order_id}', [OrderController::class, 'get_order_by_id'])->name('api.orders.get-order-by-id');
//     Route::get('verify-payment/{order}/{transaction_reference}', [OrderController::class, 'verify_payment'])->name('api.orders.verify-payment');
// });
