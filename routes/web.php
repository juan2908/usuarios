<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userscontroller;
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

Route::get('users',[userscontroller::class,'index'])->name('users.index');
Route::get('users/create',[userscontroller::class,'create'])->name('users.create');
Route::post('users',[userscontroller::class,'store'])->name('users.store');
