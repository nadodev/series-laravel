<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SeriesController::class, 'index'])->name('index');
