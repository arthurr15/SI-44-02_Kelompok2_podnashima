<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\HomepageController;

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

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'registerUser']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginUser'])->name('login');
Route::post('/logout', [UserController::class, 'logoutUser']);

Route::get('/', [HomepageController::class, 'index'])->name('home');

Route::get('/admin', [HomepageController::class, 'admin']);
Route::get('/pembayaran/{id}', [HomepageController::class, 'bayar']);
Route::get('/pembayaran/{id}/berhasil', [HomepageController::class, 'bayarberhasil']);

Route::get('/tiket', [TicketController::class, 'index']);
Route::post('/tiket', [TicketController::class, 'tiket']);