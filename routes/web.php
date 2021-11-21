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

Route::get('/',[App\Http\Controllers\VisitorController::class,'index']);
Route::get('visitor-list-show',[App\Http\Controllers\VisitorController::class,'show']);
Route::get('create-visitor',[App\Http\Controllers\VisitorController::class,'create']);
Route::post('store-visitor',[App\Http\Controllers\VisitorController::class,'store']);

