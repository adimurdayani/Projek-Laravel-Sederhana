<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BerandaController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::get('/user/edit/{user}', [UserController::class, 'edit']);
Route::post('/user/aksiTambah', [UserController::class, 'aksiTambah']);
Route::put('/user/aksiUpdate/{user}', [UserController::class, 'aksiUpdate']);
Route::delete('/user/hapus/{user}', [UserController::class, 'hapus']);
