<?php

use App\Http\Controllers\DigiyouthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

// Route::get('/upload', [FileUploadController::class, 'getHeader'])->name('upload.form');

// Route::post('/upload', [FileUploadController::class, 'save'])->name('upload.save');

Route::get('/', function () {
    return view('index');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/login', function () {
    return view('login');
}); 