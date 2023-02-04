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
    // --- Show
    public function pokemonShow($id){

        $pokemon = Pokemon::find($id);

        $data = [
            'pokemon' => $pokemon
        ];
         
        return view('pages.show-pokemon', $data);
    }
}
