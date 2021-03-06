<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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
route::get('/', [MainController::class, 'Show']);

route::get('/home', [HomeController::class, 'Show']);

Route::get('/register', [RegisterController::class, 'Show']);
Route::post('register', [RegisterController::class, 'Store']);

Route::get('/users', [UserController::class, 'Show']);
