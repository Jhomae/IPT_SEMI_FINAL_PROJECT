<?php

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

Route::get('/',[App\Http\Controllers\InvestorController::class,'index']);
Route::get('investor-list-show',[App\Http\Controllers\InvestorController::class,'show']);
Route::get('create-investor',[App\Http\Controllers\InvestorController::class,'create']);
Route::post('store-investor',[App\Http\Controllers\InvestorController::class,'store']);

