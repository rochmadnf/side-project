<?php

use App\Http\Controllers\ResearcherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/check', function () {
    return view('pages.check');
})->name('check');

Route::get('/researcher', [ResearcherController::class, 'index'])->name('researcher');
