<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Models Connect
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newPokemon = new Pokemon();

        $newPokemon -> pokedex_n = 0001;
        $newPokemon -> img_link = "https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png";
        $newPokemon -> name = "Bulbasaur";
        $newPokemon -> sex = "Male Female";
        $newPokemon -> type = "Grass Poison";
        $newPokemon -> type_weakness = "Fire Psychic Flying Ice";
        $newPokemon -> height = "0,7";
        $newPokemon -> weight = "6,9";
        $newPokemon -> ability = "Overgrow";   
        $newPokemon -> category = "Seed";
        $newPokemon -> lv = 1;
        $newPokemon -> description = " There is a plant seed on its back right from the day this Pokémon is born. The seed slowly grows larger.
        ";

        $newPokemon -> save();
    }
}
