<?php

use App\Livewire\TodoList;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', TodoList::class);