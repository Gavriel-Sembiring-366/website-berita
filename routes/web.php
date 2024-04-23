<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [RouterController::class, 'welcome']); //welcome page route
Route::get('/login', [RouterController::class, 'login']); //login page route
Route::get('/signup', [RouterController::class, 'welcome']); //signup page route
Route::get('/news', [RouterController::class, 'news']); //signup page route