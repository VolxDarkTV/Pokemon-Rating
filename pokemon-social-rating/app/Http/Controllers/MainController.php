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

    // --- Destroy
    public function pokemonDestroy($id){

        $pokemon = Pokemon::find($id);

        $pokemon -> delete();

        return redirect() -> route('pokemonHome');
    }

    // --- Create
    public function pokemonCreate(){
        return view('pages.create-pokemon');
    }
    // --- Store
    public function pokemonStore(Request $request){

        $data = $request -> all();

        $pokemon = new Pokemon();

        $pokemon -> pokedex_n = $data['pokedex_n'];
        $pokemon -> img_link = $data['img_link'];
        $pokemon -> name = $data['name'];
        $pokemon -> sex = $data['sex'];
        $pokemon -> type = $data['type'];
        $pokemon -> type_weakness = $data['type_weakness'];
        $pokemon -> height = $data['height'];
        $pokemon -> weight = $data['weight'];
        $pokemon -> ability = $data['ability'];
        $pokemon -> category = $data['category'];
        $pokemon -> lv = $data['lv'];
        $pokemon -> description = $data['description'];
        
        $pokemon -> save();

        return redirect() -> route('pokemonHome');
    }
}
