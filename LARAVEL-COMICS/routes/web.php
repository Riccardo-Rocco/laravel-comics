<?php

use App\Http\Controllers\ComicController;

Route::get('/comics', [ComicController::class, 'index']);
