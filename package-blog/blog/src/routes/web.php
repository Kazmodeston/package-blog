<?php

use Illuminate\Support\Facades\Route;
use Skillshare\PackageBlog\Http\Controllers\BlogUserController;


Route::prefix('api')->group(function () {

    Route::prefix('v1')->group(function () {
        
        Route::get('/blog', [BlogUserController::class, 'index']);

    });
    
});

