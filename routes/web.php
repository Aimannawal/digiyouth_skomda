<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

// Route::get('/upload', [FileUploadController::class, 'getHeader'])->name('upload.form');

// Route::post('/upload', [FileUploadController::class, 'save'])->name('upload.save');

Route::get('/', function () {
    return view('welcome');
});
