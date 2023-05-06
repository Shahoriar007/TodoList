<?php

use Illuminate\Support\Facades\Route;

// Route::get('todolist', 'TodolistController@welcome');

// Lists


Route::middleware('auth')->group(function () {
    Route::get('/all-lists', [App\Modules\TodoList\Http\Controllers\Lists\AlllistController::class, 'index'])->name('all_lists');
    Route::post('/create-lists', [App\Modules\TodoList\Http\Controllers\Lists\AlllistController::class, 'create'])->name('create_lists');
    Route::post('/edit-list/{id}', [App\Modules\TodoList\Http\Controllers\Lists\AlllistController::class, 'edit'])->name('edit_list');
    Route::post('/delete-list/{id}', [App\Modules\TodoList\Http\Controllers\Lists\AlllistController::class, 'destroy'])->name('dalete_list');
});