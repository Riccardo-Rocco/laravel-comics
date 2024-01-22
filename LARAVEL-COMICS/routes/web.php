<?php

use App\Http\Controllers\HomeController;  
use App\Http\Controllers\ComicController;  

Route::get('/', [HomeController::class, 'index']);

Route::get('/comics', [ComicController::class, 'index']);
