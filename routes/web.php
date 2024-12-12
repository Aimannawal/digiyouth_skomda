<?php

use App\Http\Controllers\DigiyouthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

// Route::get('/upload', [FileUploadController::class, 'getHeader'])->name('upload.form');

// Route::post('/upload', [FileUploadController::class, 'save'])->name('upload.save');

Route::get('/', [DigiyouthController::class, 'index'])->name("homepage");

Route::get('/detail/{id}', [DigiyouthController::class, 'detail'])->name('detail');

Route::get('/category/{id}', [DigiyouthController::class, 'category'])->name("category");

Route::get('/login', [DigiyouthController::class, 'login']);