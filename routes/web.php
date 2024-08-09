<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'login'])->name('login');


// Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('listuser', [RegisterController::class, 'index']);
Route::get('/user/create', [RegisterController::class, 'create'])->name('create.user');
Route::post('/user/store', [RegisterController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [RegisterController::class, 'edit'])->name('user.edit');
// Route::post('/user/delete/{id}', [RegisterController::class, 'edit'])->name('user.edit');
// Route::match(['get', 'post'] , '/login', [LoginController::class, 'login']);
