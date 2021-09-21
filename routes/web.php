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

Route::get('/', [\App\Http\Controllers\SiteController::class,'index'])->name('home');
Route::get('/blogs', [\App\Http\Controllers\BlogController::class,'index'])->name('blog');
Route::get('/blogs/detail', [\App\Http\Controllers\BlogController::class,'detail'])->name('blog.detail');
Route::get('/events', [\App\Http\Controllers\EventController::class,'index'])->name('event');
Route::get('/events/detail', [\App\Http\Controllers\EventController::class,'detail'])->name('event.detail');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
