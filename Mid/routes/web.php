<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\NameController;
use App\Http\Controllers\MidController;

Route::get('/',[NameController::class,'Home'])->name('root');

Route::get('/register',[MidController::class,'create'])->name('Mid.register');

Route::post('/register',[MidController::class,'createSubmit'])->name('Mid.register.submit');
Route::get('/login',[MidController::class,'login'])->name('Mid.login');

Route::post('/login',[MidController::class,'loginSubmit'])->name('Mid.login.submit');

Route::get('/dashboard',[MidController::class,'List'])->name('Mid.List');
