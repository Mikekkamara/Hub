<?php

use App\Http\Controllers\postsController;
use App\Http\Controllers\HomeController;
use App\Models\likes;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::resource('/home', postsController::class);

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('home/{id}/like',[postsController::class, 'like'])->name('likes');
