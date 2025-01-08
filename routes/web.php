<?php

use App\Http\Controllers\DigiyouthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/upload', [FileUploadController::class, 'getHeader'])->name('upload.form');

// Route::post('/upload', [FileUploadController::class, 'save'])->name('upload.save');

Route::get('/', [DigiyouthController::class, 'index'])->name("homepage");
// Route::get('/', [DigiyouthController::class, 'footer'])->name("homepage");


Route::get('/detail/{id}', [DigiyouthController::class, 'detail'])->name('detail');
Route::get('/detail/{id}/sort', [DigiyouthController::class, 'sort'])->name('detail.sort');
Route::post('/detail/{id}/like', [DigiyouthController::class, 'like'])->name('detail.like');
Route::post('/detail/{id}/comment', [DigiyouthController::class, 'comment'])->name('detail.comment');
Route::post('/detail/{id}/reply', [DigiyouthController::class, 'reply'])->name('detail.reply');

Route::get('/category/{id}', [DigiyouthController::class, 'category'])->name("category");

Route::get('/profile-user/{id}', [DigiyouthController::class, 'profileDetail'])->name("profile.detail");

Route::get('/search', [DigiyouthController::class, "search"])->name("search");
// Route::get('/login', [DigiyouthController::class, 'login']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
