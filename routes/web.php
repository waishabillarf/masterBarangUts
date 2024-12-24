<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function(){
    return view('home');
});
// Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('barangs', BarangController::class);
Route::resource('homes', HomeController::class);

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('index');
