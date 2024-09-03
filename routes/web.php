<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;

Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor.index');
Route::get('/doctor/create', [DoctorController::class, 'create'])->name('doctor.create');
Route::post('/doctor/store', [DoctorController::class, 'store'])->name('doctor.store');
Route::get('/doctor/edit{doctor}', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::put('/doctor/update{doctor}', [DoctorController::class, 'update'])->name('doctor.update');
Route::get('/doctor/show{doctor}', [DoctorController::class,'show'])->name('doctor.show');
Route::delete('/doctor/destroy{doctor}', [DoctorController::class, 'destroy'])->name('doctor.destroy');

Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');
Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
Route::post('/patient/store', [PatientController::class, 'store'])->name('patient.store');
Route::get('/patient/edit{patient}', [PatientController::class, 'edit'])->name('patient.edit');
Route::put('/patient/update{patient}', [PatientController::class, 'update'])->name('patient.update');
Route::get('/patient/show{patient}', [PatientController::class,'show'])->name('patient.show');
Route::delete('/patient/destroy{patient}', [PatientController::class, 'destroy'])->name('patient.destroy');

Route::get('/', function () {
    return view('welcome');
    // return view('index');
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
