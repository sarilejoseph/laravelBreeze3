<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::view('/', 'welcome');
Route::view('/form', 'auth.register');
Route::view('/list', 'list');
Route::get('/users', function () {
    return view('users', ['users' => \App\Models\User::all()]);
});
Route::view('/media', 'media');
Route::view('/blog', 'blog');
Route::view('/styling', 'styling');