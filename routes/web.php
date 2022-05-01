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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::put('/user/update/{user}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{user}', [UserController::class, 'delete'])->name('user.delete');
