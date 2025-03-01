<?php

use App\Livewire\TodoList;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', TodoList::class)->name('todo');