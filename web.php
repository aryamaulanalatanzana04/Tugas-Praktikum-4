<?php

use Illuminate\support\facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

// route::get('/',function(){
//     returnview('welcome');
// })->name(home);

Route::resource('employees', EmployeeController::class);
// route::get('profile',ProfileController::calss)->name('profile');
// route::get('home', [HomeController:: 'index'])->name('home');
// raoute::get('/home', [HomeController::class, 'index']);


