<?php

use Illuminate\Support\Facades\Route;

// Route::get('todolist', 'TodolistController@welcome');

Route::get('/all-lists', [App\Modules\TodoList\Http\Controllers\Lists\ListController::class, 'index'])->name('all_lists');
