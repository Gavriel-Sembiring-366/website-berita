<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use app\models\berita;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HeadlineController;

//welcome page route
Route::get('/', [WelcomeController::class, 'welcome'])->name('headline.show');  

// Route for di
Route::resource('berita', WelcomeController::class);

// Route for individual news
Route::get('news/{id}', [WelcomeController::class, 'show'])->name('news.show'); 

//Route for editor
Route::get('editor', [HeadlineController::class, 'index'])->name('editor.show');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


