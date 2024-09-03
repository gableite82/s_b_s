<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\TemplatesController;

// Route::get('/', [Main::class, 'index'])->name('index');
Route::get('/', [TemplatesController::class, 'index']);