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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//resourceコントローラー
Route::resource('/post','PostController');

//いいねを付ける
Route::get('/nice/{post}','NiceController@nice')->name('nice');
Route::get('/unnice/{post}','NiceController@unnice')->name('unnice');

//いいねを表示するページ
Route::get('/index','NiceController@index')->name('post.show');
