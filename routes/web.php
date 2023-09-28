<?php

use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/', \App\Http\Controllers\PostController::class);
 
Route::get('/post/index',[BukuController::class,'index']);

Route::get('/post/create', [BukuController::class, 'create'])->name('post.create');
Route::post('/post', [BukuController::class, 'store'])->name('buku.store');
//update
Route::get('/post/edit/{id}', [BukuController::class, 'edit'])->name('post.edit');
//Post
Route::post('/buku/update/{id}', [BukuController::class, 'update'])->name('post.update');
