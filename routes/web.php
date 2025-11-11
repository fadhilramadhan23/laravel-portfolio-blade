<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('website_portofolio.index');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('website_portofolio.about');
})->name('about');

// Projects Page
Route::get('/projects', function () {
    return view('website_portofolio.project');
})->name('projects');

// Novel Page
Route::get('/novel', function () {
    return view('website_portofolio.novel');
})->name('novel');