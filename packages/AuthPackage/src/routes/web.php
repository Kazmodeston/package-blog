<?php

use Illuminate\Support\Facades\Route;
use Skillshare\AuthPackage\Http\Controllers\AuthUserController;


Route::group(['middleware' => 'web'], function () {

    Route::get('/package-user', [AuthUserController::class, 'index']);
    Route::post('/package-user/create', [AuthUserController::class, 'register'])->name('auth_register');

});
