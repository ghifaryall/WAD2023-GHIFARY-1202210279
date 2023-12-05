<?php

use App\Models\Showroom;
use App\Http\Controllers\ShowroomController;
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

Route::get('/', function () {
  return view('home');
});

Route::get('showroom', [MobilController::class, 'index'])->name('showroom.index');
Route::get('showroom/create', [MobilController::class, 'create'])->name('showroom.create');
Route::post('showroom/store', [MobilController::class, 'store'])->name('showroom.store');