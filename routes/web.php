<?php
// use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/detail', function () {
//     return view('detail');
// });

Route::get('/detail/{id}', 'DetailController@showDetail');

Route::get('/document', function () {
    return view('document');
});

Route::get('/publikasi', function () {
    return view('publikasi');
});

Route::get('/publikasidetail', function () {
    return view('publikasidetail');
});

Route::get('/news-detail', function () {
    return view('news-detail');
});


Route::get('/test/{id}', 'ProfileController@showProfile');
