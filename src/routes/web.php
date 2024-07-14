<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsrController;
use App\Http\Controllers\AdminController;
use Laravel\Fortify\Features;

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

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('contacts', [ContactController::class, 'store']);
Route::get('/', [CategoryController::class, 'index']);

// Route::get('/register', [UsrController::class, 'index']);
Route::post('/register/users', [UsrController::class, 'store']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/search', [AdminController::class, 'search']);