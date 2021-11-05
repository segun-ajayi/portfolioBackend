<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest');

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/introduction', function() {
        return view('introduction.index');
    })->name('introduction');

    Route::get('/about', function() {
        return view('about.index');
    })->name('about');

    Route::get('/education', function() {
        return view('education.index');
    })->name('education');

    Route::get('/experience', function() {
        return view('experience.index');
    })->name('experience');

    Route::get('/portfolio', function() {
        return view('portfolio.index');
    })->name('portfolio');

    Route::get('/navbar', function() {
        return view('navbar.index');
    })->name('navbar');

    Route::get('/skill', function() {
        return view('skill.index');
    })->name('skill');

    Route::get('/social', function() {
        return view('social.index');
    })->name('social');
});


require __DIR__.'/auth.php';
