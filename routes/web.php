<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use app\Http\Controllers\PersonController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::resource('person', PersonController::class)->only(['index','create']);


Route::post(
    '/contact',
    [HomeController::class, 'create']
)->name('contact.create');










