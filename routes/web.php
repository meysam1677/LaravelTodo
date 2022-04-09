<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', [ TodoController::class , 'index' ] )->name('todos.index');
Route::get('/todo/create', [ TodoController::class , 'create' ] )->name('todos.create');
Route::post('/', [ TodoController::class , 'store' ] )->name('todos.store');
Route::get('/todo/{todo}/edit', [ TodoController::class , 'edit' ] )->name('todos.edit');
Route::get('/todo/{todo}', [ TodoController::class , 'show' ] )->name('todos.show');
Route::put('/todo/{todo}', [ TodoController::class , 'update' ] )->name('todos.update');
Route::delete('/todo/{todo}', [ TodoController::class , 'destroy' ] )->name('todos.delete');
Route::get('/todo/{todo}/complated', [ TodoController::class , 'complated' ] )->name('todos.complated');
Route::get('/todo', [ TodoController::class , 'search' ] )->name('todos.search');
