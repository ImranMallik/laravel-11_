<?php

use App\Http\Controllers\CRUD\CrudController;
use App\Http\Controllers\UserRoleCheck;
use App\Http\Middleware\checkRoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 
Route::get('user', [UserRoleCheck::class, 'index']);
Route::post('store', [UserRoleCheck::class, 'store'])->name('user.data');
// CRUD routes
Route::resource('employee', CrudController::class);
