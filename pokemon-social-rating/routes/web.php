<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'pokemonHome'])
    -> name("pokemonHome");

// Show
Route::get('/pokemon/show{id}', [MainController::class, 'pokemonShow'])
    -> name("pokemonShow");
