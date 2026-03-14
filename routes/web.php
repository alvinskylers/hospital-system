<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/doctors-all', [UserController::class, 'viewDoctors'])->name('doctors');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth', 'verified')->name('dashboard');
    Route::post('appointment', [UserController::class, 'bookAppointment'])->middleware('auth', 'verified')->name('appointment');
});

Route::middleware('auth','admin')->group(function(){
    Route::get('/doctors-add', [AdminController::class, 'addDoctorsView'])->name('doctors-add');
    Route::post('/doctors-add', [AdminController::class, 'saveDoctor'])->name('post-add-doctors');
    Route::get('/doctors-list', [AdminController::class, 'allDoctors'])->name('doctors-list');
    Route::get('/doctor-delete/{id}', [AdminController::class, 'deleteDoctor'])->name('doctor-delete');
    Route::get('/doctor-edit/{id}', [AdminController::class, 'editDoctor'])->name('doctors-edit');
    Route::post('/doctor-update/{id}', [AdminController::class, 'updateDoctor'])->name('doctor-update');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
