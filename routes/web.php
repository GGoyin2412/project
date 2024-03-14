<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministratorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminini', [AdministratorController::class, 'showLoginForm'])->name('adminini');
Route::post('/adminini', [AdministratorController::class, 'login'])->name('adminini.login');