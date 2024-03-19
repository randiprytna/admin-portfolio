<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
 
Route::middleware('guest')->group(function ()
{
    Route::get('/', function () {
        return redirect()->route('sign-in');
    });
    Route::get('/sign-in', [AuthController::class, 'signIn'])->name('login');
    Route::post('/sign-in', [AuthController::class, 'signInAction']);
});

Route::middleware('auth')->group(function ()
{
    Route::get('sign-out', [AuthController::class, 'signOut'])->name('sign-out');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/data-table', [BlogController::class, 'dataTable'])->name('blog.data-table');
});