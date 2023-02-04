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

        $newPokemon -> pokedex_n = 0003;
        $newPokemon -> img_link = "https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png";
        $newPokemon -> name = "Venusaur";
        $newPokemon -> sex = "Male Female";
        $newPokemon -> type = "Grass Poison";
        $newPokemon -> type_weakness = "Fire Psychic Flying Ice";
        $newPokemon -> height = "6,07";
        $newPokemon -> weight = "220,5";
        $newPokemon -> ability = "Overgrow";   
        $newPokemon -> category = "Seed";
        $newPokemon -> lv = 1;
        $newPokemon -> description = "When the bulb on its back grows large, it appears to lose the ability to stand on its hind legs.";

        $newPokemon -> save();
    }
}
