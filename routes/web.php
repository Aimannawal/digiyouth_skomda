<?php

use App\Http\Controllers\DigiyouthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

// Route::get('/upload', [FileUploadController::class, 'getHeader'])->name('upload.form');

// Route::post('/upload', [FileUploadController::class, 'save'])->name('upload.save');

Route::get('/', [DigiyouthController::class, 'index'])->name('index');
Route::get('/category', [DigiyouthController::class, 'category'])->name('category');
Route::get('/detail', [DigiyouthController::class, 'detail'])->name('detail');