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


Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index']);

Route::controller(App\Http\Controllers\MemberController::class)->group(function () {
    Route::get('/index/index', 'index');
    Route::get('/index/book', 'book');
    Route::get('/index/about', 'about');
});


Route::controller(App\Http\Controllers\AdminController::class)->group(function () {
Route::get('/admin/dashboard', 'index'); 
Route::get('/admin/message', 'message');
Route::post('/admin/dashboard', 'sendMessage');
Route::get('/admin/viewmessage', 'view');

});



