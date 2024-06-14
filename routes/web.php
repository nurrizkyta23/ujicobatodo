<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodolistController;

Route::get('/', [HomeController::class, 'home']);

Route::view('/template', 'template');

// Login routes
Route::get('/login', function () {
    return view('login');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->middleware([\App\Http\Middleware\OnlyGuestMiddleware::class]);
    Route::post('/login', 'doLogin')->middleware([\App\Http\Middleware\OnlyGuestMiddleware::class]);
    Route::post('/logout', 'doLogout')->middleware([\App\Http\Middleware\OnlyMemberMiddleware::class]);
    Route::get('/signup', 'showSignupForm')->middleware([\App\Http\Middleware\OnlyGuestMiddleware::class])->name('signup');
    Route::post('/signup', 'signup')->middleware([\App\Http\Middleware\OnlyGuestMiddleware::class]);
});

// Todolist routes
Route::controller(TodolistController::class)
    ->middleware([\App\Http\Middleware\OnlyMemberMiddleware::class])->group(function () {
        Route::get('/todolist', 'todoList');
        Route::post('/todolist', 'addTodo');
        Route::get('/openAddTodo', 'openAddTodo');
        Route::get('/todolist/{id}/edit', 'editTodo');
        Route::post('/todolist/{id}/delete', 'removeTodo');
        Route::get('/todolist/{id}/edit', 'editTodo');
        Route::post('/todolist/{id}/update', 'updateTodo');
    });
