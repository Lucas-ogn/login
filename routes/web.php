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
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'index']);
Route::post('/do', [AuthController::class, 'login']);
Route::get('/logout',[AuthController::class, 'logout']);
Route::get('/cadastro', [UserController::class, 'create']);
Route::post('/cadastro', [UserController::class, 'store']);
Route::get('/perfil', [AuthController::class, 'dashboard']);
Route::put('/perfil/update', [UserController::class, 'update']);
Route::delete('/perfil/delete', [UserController::class, 'destroy']);
