<?php

use App\Http\Controllers\ResearcherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home')->withPageTitle(false);
})->name('home');

Route::get('/app-info', fn () => view('pages.app-info')->withPageTitle('Info Aplikasi'))->name('appInfo');

Route::get('/check', function () {
    return view('pages.check')->withPageTitle('Uji Data');
})->name('check');

Route::get('/cluster-map', function () {
    return view('pages.cluster-map')->withPageTitle('Peta Kluster');
})->name('cluster');

Route::get('/researcher', [ResearcherController::class, 'index'])->name('researcher');
