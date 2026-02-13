<?php

use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\WaTestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::controller(RegistrationController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/register', 'store')->name('register.store');
    Route::get('/register/success', 'success')->name('register.success');
});

Route::controller(FreelancerController::class)->group(function () {
    Route::get('/freelancers', 'index')->name('freelancers.index');
    Route::get('/freelancers/create', 'create')->name('freelancers.create');
    Route::post('/freelancers', 'store')->name('freelancers.store');
    Route::get('/freelancers/{freelancer}', 'show')->name('freelancers.show');
    Route::get('/freelancers/{freelancer}/edit', 'edit')->name('freelancers.edit');
    Route::put('/freelancers/{freelancer}', 'update')->name('freelancers.update');
    Route::delete('/freelancers/{freelancer}', 'destroy')->name('freelancers.destroy');
});

// WA Test API Routes
Route::controller(WaTestController::class)->group(function () {
    Route::get('/wa-test', 'index')->name('wa-test.index');
    Route::post('/wa-test', 'send')->name('wa-test.send');
});
