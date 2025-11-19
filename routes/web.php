<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\ContactController;

// Home Page - PAKAI CONTROLLER
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Page - PAKAI CONTROLLER
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Projects Page - PAKAI CONTROLLER
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

// Novel Page - PAKAI CONTROLLER
Route::get('/novel', [NovelController::class, 'index'])->name('novel');

// Contact Page - PAKAI CONTROLLER
Route::get('/contact', [ContactController::class, 'index'])->name('contact');