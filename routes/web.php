<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\servicesController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\UplodeController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'index']);
Route::get('/services',[ServicesController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/uplode',[UplodeController::class, 'index']);
Route::post('/uplode',[UplodeController::class, 'store']);
