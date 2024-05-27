<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use app\models\berita;
use App\Http\Controllers\HeadlineController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

//TEST ONLY
Route::get('/test', [HeadlineController::class, 'test'])->name('test.show');  


//welcome page route
Route::get('/', [HeadlineController::class, 'welcome'])->name('headline.show');  




// Route for individual news
Route::get('news/{id}', [NewsController::class, 'show'])->name('news.show'); 
 


//Route For Login
Route::get('login', [LoginController::class, 'index'])->name('login.show');
Route::post('login', [LoginController::class, 'store'])->name('login.run');


//Route For Register
Route::get('register', [RegisterController::class, 'index'])->name('register.show');
Route::post('register', [RegisterController::class, 'store'])->name('register.run');

//  Start of protected routes

    //Route for create news
    Route::get('create', [CreateController::class, 'index'])->name('create.show');
    Route::post('create', [CreateController::class, 'store'])->name('create.store');

    //Route for edit page
    Route::get('edit/{id}', [EditController::class, 'show'])->name('edit.show');
    Route::post('edit/{id}', [EditController::class, 'update'])->name('edit.update');
    Route::delete('edit/{id}', [EditController::class, 'destroy'])->name('edit.delete');

    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard.show');
    Route::post('dashboard', [dashboardController::class, 'store'])->name('dashboard.run');
    
// end of protected routes

Route::middleware('auth:sanctum')->get('/user', function () {
    return $request->user();
});


