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



Route::get('/home', function() {
    return view('home');
});

Route::get('/Dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('Dashboard');
Route::get('/Monitoring', [App\Http\Controllers\MonitoringController::class, 'index'])->name('Monitoring');
Route::get('/Dispenser', [App\Http\Controllers\DispenserController::class, 'index'])->name('Dispenser');
Route::get('/Dispenser/create', [App\Http\Controllers\DispenserController::class, 'create'])->name('Dispenser.create');
Route::get('/Dispenser/edit', [App\Http\Controllers\DispenserController::class, 'edit'])->name('Dispenser.edit');
Route::get('/InventarisGalon', [App\Http\Controllers\InventarisGalonController::class, 'index'])->name('InventarisGalon');



