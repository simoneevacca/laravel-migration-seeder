<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guests\TrainController;

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

Route::get('/', [TrainController::class, 'home'])->name('home');


Route::get('train', [TrainController::class, 'index'])->name('today');