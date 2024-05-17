<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WeaponController;
use App\Models\Weapon;
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

Route::get('/', [WeaponController::class, 'index'])->name('home');

Route::resource('weapons', WeaponController::class);

