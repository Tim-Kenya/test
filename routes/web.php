<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test\IndexController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('test.index');

Route::get('/aboutus', [IndexController::class, 'aboutus'])->name('test.aboutus');

Route::get('/contacts', [IndexController::class, 'contacts'])->name('test.contacts');
