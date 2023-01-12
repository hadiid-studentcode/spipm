<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitatorController;
use App\Http\Controllers\KepanitiaanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// default
Route::get('/', function () {
    return redirect('/login');
})->name('login')->middleware('guest');

// login
Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
// logout
Route::get('/logout', [LoginController::class, 'logout']);


// dashboard
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
// kepanitiaan
Route::resource('/kepanitiaan', KepanitiaanController::class)->middleware('auth');
// fasilitator
Route::resource('/fasilitator', FasilitatorController::class)->middleware('auth');
// peserta
Route::resource('/peserta', PesertaController::class)->middleware('auth');








