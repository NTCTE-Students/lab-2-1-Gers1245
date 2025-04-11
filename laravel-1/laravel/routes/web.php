<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Показ постов.
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Редактирование постов
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Обновление записи
Route::patch('/posts/{post}', [PostController::class, 'update'])->name('posts.update');