<?php

use App\Http\Controllers\CheckController;
use Illuminate\Support\Facades\Route;

Route::post('/check-data', [CheckController::class, 'calculate']);
