<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DispenserController;
use App\Models\DispenserModel;

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
Route::post('/Dispenser',[App\Http\Controllers\DispenserController::class,'store'])->name('Dispenser.store');
Route::get('/Dispenser/{dis_id}/edit', [App\Http\Controllers\DispenserController::class, 'edit'])->name('Dispenser.edit');
Route::get('/Dispenser/{id}',[DispenserController::class,'update'])->name('Dispenser.update');
Route::delete('/Dispenser/{dis_id}', [App\Http\Controllers\DispenserController::class, 'delete'])->name('Dispenser.delete');
Route::delete('/Dispenser/{dis_id}',[DispenserController::class,'delete'])->name('Dispenser.delete');

Route::get('/Sensor', [App\Http\Controllers\SensorController::class, 'index'])->name('Sensor');
Route::get('/Sensor/create', [App\Http\Controllers\SensorController::class, 'create'])->name('Sensor.create');
Route::get('/Sensor/{sen_id}/edit', [App\Http\Controllers\SensorController::class, 'edit'])->name('Sensor.edit');
Route::delete('/Sensor/{sen_id}', [App\Http\Controllers\SensorController::class, 'delete'])->name('Sensor.delete');

// routes/web.php
Route::get('/PendaftaranDevice',[App\Http\Controllers\PendaftaranDeviceController::class,'index'])->name('PendaftaranDevice');

Route::delete('/dispenser/{dis_id}', 'DispenserController@destroy')->name('Dispenser.destroy');



//Inventaris Galon
Route::get('/InventarisGalon', [App\Http\Controllers\InventarisGalonController::class, 'index'])->name('InventarisGalon');

