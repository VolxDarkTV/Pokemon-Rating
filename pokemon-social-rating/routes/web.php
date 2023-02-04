<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'pokemonHome'])
    -> name("pokemonHome");

// Show
Route::get('/pokemon/show{id}', [MainController::class, 'pokemonShow'])
    -> name("pokemonShow");

// Destroy
Route::get('/pokemon/destroy{id}', [MainController::class, 'pokemonDestroy'])
    -> name('pokemonDestroy');

// Create
Route::get('/pokemon/create', [MainController::class, 'pokemonCreate'])
    -> name('pokemonCreate');
// Store
Route::post('pokemon/store', [MainController::class, 'pokemonStore'])
    -> name('pokemonStore');