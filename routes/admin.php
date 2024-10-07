<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/home', function () {
        return view('admin.index');
    })->middleware('isAdmin');
    require __DIR__ . '/admin_auth.php';
});
