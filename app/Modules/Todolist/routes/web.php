<?php

use Illuminate\Support\Facades\Route;

// Route::get('todolist', 'TodolistController@welcome');

// Lists


Route::middleware('auth')->group(function () {

    // For list  
    Route::get('/all-lists', [App\Modules\TodoList\Http\Controllers\Lists\AlllistController::class, 'index'])->name('all_lists');
    Route::post('/create-lists', [App\Modules\TodoList\Http\Controllers\Lists\AlllistController::class, 'create'])->name('create_lists');
    Route::post('/edit-list/{id}', [App\Modules\TodoList\Http\Controllers\Lists\AlllistController::class, 'edit'])->name('edit_list');
    Route::post('/delete-list/{id}', [App\Modules\TodoList\Http\Controllers\Lists\AlllistController::class, 'destroy'])->name('dalete_list');

    //  For Tasks
    Route::get('/all-tasks/{id}', [App\Modules\TodoList\Http\Controllers\Lists\TaskController::class, 'index'])->name('all_tasks');
    Route::post('/create-tasks', [App\Modules\TodoList\Http\Controllers\Lists\TaskController::class, 'create'])->name('create_tasks');

    
});