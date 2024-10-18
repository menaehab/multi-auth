<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminsController;

Route::prefix('admin')->group(function () {
    Route::middleware('isAdmin')->group(function () {
        Route::view('/home', 'admin.index')->name('admin');

        Route::resource('admins', AdminsController::class)->except(['show']);

        Route::resource('users', UsersController::class)->except(['show']);

        Route::resource('roles', RolesController::class);
    });
    require __DIR__ . '/admin_auth.php';
});