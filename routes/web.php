<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\SearchController;

Route::get('/', [ManufacturerController::class, 'home'])->name('home'); // Homepage
Route::get('/manufacturer/{id}', [ManufacturerController::class, 'show'])->name('manufacturer.detail'); // Manufacturer detail page
Route::get('/search', [SearchController::class, 'show'])->name('search'); // Display the search page
Route::get('/search/results', [SearchController::class, 'searchResult'])->name('search.results'); // Handle search query
