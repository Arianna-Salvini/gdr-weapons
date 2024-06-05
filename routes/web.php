<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CharacterController;
use App\Http\Controllers\Admin\WeaponController;
use App\Http\Controllers\Admin\TypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

/*

Route::get('/weapons', function () {
    $weapons = \App\Models\Weapon::all();
    return view('guests.weapons', compact('weapons'));
});

Route::get('/characters', function () {
    $characters = \App\Models\Character::all();
    return view('guests.characters', compact('characters'));
});
 */

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('characters', CharacterController::class)/* ->parameters(['characters' => 'character:slug']) */;
        Route::resource('weapons', WeaponController::class)->parameters(['weapons' => 'weapon:slug']);
        Route::resource('types', TypeController::class)/* ->parameters(['types' => 'type:slug']) */;
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
