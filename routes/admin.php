<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::controller(AdminController::class)
    ->prefix('admin')
    ->as('admin.')
    ->middleware('authen')
    ->group(function () {

        Route::get('/dashboard', 'dashboard')->name('dashboard');

        // Route::get('/delete/{id}', 'destroy')->name('delete');
        // Route::get('/edit/{id}','edit')->name('edit');
        // Route::post('/update','update')->name('update');


    });


Route::controller(AdminController::class)
    ->prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::view('login','backend.login')->name('login');
    });






require __DIR__.'/auth.php';
