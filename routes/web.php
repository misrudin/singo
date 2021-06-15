<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DetailController ;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\PubdetailController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [HomeController ::class,'index']);
Route::get('/home',[HomeController ::class,'index']);
Route::get('/profile',[ProfileController ::class,'index']);
Route::get('/test/{id}',[ProfileController ::class,'showProfile']);
Route::get('/detail/{id}',[DetailController::class,'showDetail']);
Route::get('/document',[DocumentController ::class,'showDetail']);
Route::get('/publikasi',[PublikasiController::class,'index']);
Route::get('/pubdetail',[PubdetailController::class,'index']);
Route::get('/news-detail',[NewsController::class,'index']);
