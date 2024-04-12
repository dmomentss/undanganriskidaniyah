<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BukutamuController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [BukutamuController::class, 'index']);
Route::post('/bukutamu', [BukutamuController::class, 'store'])->name('bukutamu.store');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/form', [FormController::class, 'index'])->middleware('auth');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [FormController::class, 'logout'])->middleware('auth');
Route::delete('/bukutamu/{id}', [FormController::class, 'destroyAttendance'])->name('attendance.destroy');
