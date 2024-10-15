<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminsController;

Route::prefix('admin')->group(function () {
    Route::middleware('isAdmin')->group(function () {
        Route::view('/home', 'admin.index')->name('admin');

        Route::prefix('admins')->controller(AdminsController::class)->group(function () {
            Route::get('/', 'index')->name('admins.index');
            Route::get('/create', 'create')->name('admins.create');
            Route::post('/create/store', 'store')->name('admins.store');
            Route::get('/edit/{id}', 'edit')->name('admins.edit');
            Route::put('/edit/{id}/update', 'update')->name('admins.update');
            Route::delete('/delete/{id}', 'destroy')->name('admins.delete');
        });

        Route::prefix('users')->controller(UsersController::class)->group(function () {
            Route::get('/', 'index')->name('users.index');
            Route::get('/create', 'create')->name('users.create');
            Route::post('/create/store', 'store')->name('users.store');
            Route::get('/edit/{id}', 'edit')->name('users.edit');
            Route::put('/edit/{id}/update', 'update')->name('users.update');
            Route::delete('/delete/{id}', 'destroy')->name('users.delete');
        });

        Route::prefix('roles')->controller(RolesController::class)->group(function () {
            Route::get('/', 'index')->name('roles.index');
            Route::get('/show/{id}', 'show')->name('roles.show');
            Route::get('/create', 'create')->name('roles.create');
            Route::post('/create/store', 'store')->name('roles.store');
            Route::get('/edit/{id}', 'edit')->name('roles.edit');
            Route::put('/edit/{id}/update', 'update')->name('roles.update');
            Route::delete('/delete/{id}', 'destroy')->name('roles.delete');

        });
    });

    require __DIR__ . '/admin_auth.php';
});
