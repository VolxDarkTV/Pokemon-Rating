<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models Connect
use App\Models\Pokemon;

class MainController extends Controller
{
    public function pokemonHome(){
        $pokemons = Pokemon::all();

        $data = [
            'pokemons' => $pokemons
        ];
        return view('pages.home-pokemon', $data);
    }
}
