<?php

use App\Livewire\Counter;
use App\Livewire\PostCreate;
use App\Livewire\PostIndex;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/',  Todos::class);
Route::get('/counter',  Counter::class);
Route::get('/posts',  PostIndex::class)->name('posts.index');
Route::get('/posts/create',  PostCreate::class)->name('posts.create');
