<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor.index');
Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
Route::post('/doctor/store', [DoctorController::class, 'store'])->name('doctor.store');
Route::get('/doctor/edit{doctor}', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::put('/doctor/update{doctor}', [DoctorController::class, 'update'])->name('doctor.update');
Route::get('/doctor/show{doctor}', [DoctorController::class,'show'])->name('doctor.show');
Route::delete('/doctor/destroy{doctor}', [DoctorController::class, 'destroy'])->name('doctor.destroy');

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
