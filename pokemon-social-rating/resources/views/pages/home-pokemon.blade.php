@extends('layouts.main-layouts')

@section('head')
    <title>Home Pokemon</title>
@endsection

@section('main')
    <section id="home_pokemon" class="container">

        <div class="d-flex flex-column gap-3 mt-4">
            
            <div class="d-flex justify-content-center">
                <h1 class="text-light rounded bg-primary p-2">Pokémon</h1>
            </div>
    
            <div class="col-12 bg-danger rounded p-3">
                <ul class="d-flex justify-content-center flex-wrap gap-4">
                    @foreach ($pokemons as $pokemon)
                        <li class="d-flex">
                            <a class="card bg-light d-flex flex-column align-items-center" href="{{ route('pokemonShow', ['id' => $pokemon -> id]) }}">
                                <div>
                                    <img class="my_card" src="{{$pokemon -> img_link}}" alt="">
                                </div>
                                {{$pokemon -> name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </section>
@endsection