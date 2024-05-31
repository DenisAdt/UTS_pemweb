<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(PatientController::class)->prefix('patients')->group(function () {
        Route::get('', 'index')->name('patients.index');
        Route::get('create', 'create')->name('patients.create');
        Route::post('store', 'store')->name('patients.store');
        Route::get('show/{id}', 'show')->name('patients.show');
        Route::get('edit/{id}', 'edit')->name('patients.edit');
        Route::put('edit/{id}', 'update')->name('patients.update');
        Route::delete('destroy/{id}', 'destroy')->name('patients.destroy');
    });

    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});
