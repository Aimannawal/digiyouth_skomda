<?php

use App\Http\Controllers\DigiyouthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

// Route::get('/upload', [FileUploadController::class, 'getHeader'])->name('upload.form');

// Route::post('/upload', [FileUploadController::class, 'save'])->name('upload.save');

Route::get('/', [DigiyouthController::class, 'index']);

Route::get('/detail', [DigiyouthController::class, 'detail']);

Route::get('/category', [DigiyouthController::class, 'category']);

Route::get('/login', [DigiyouthController::class, 'login']);