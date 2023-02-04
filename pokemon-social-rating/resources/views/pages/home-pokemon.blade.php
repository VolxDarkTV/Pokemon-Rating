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

            <div class="d-flex justify-content-end">
                <a class="btn btn-success" href="{{route('pokemonCreate')}}">
                    <h4>CREATE</h4>
                </a>
            </div>
    
            <div class="col-12 bg-danger rounded p-3">
                <ul class="d-flex justify-content-center flex-wrap gap-4">
                    @foreach ($pokemons as $pokemon)
                        <li class="d-flex flex-column align-items-center gap-2">
                            <a class="card bg-light d-flex flex-column align-items-center" href="{{ route('pokemonShow', ['id' => $pokemon -> id]) }}">
                                <div>
                                    <img class="my_card" src="{{$pokemon -> img_link}}" alt="">
                                </div>
                                {{$pokemon -> name}}
                            </a>
                            <div class="card px-2 py-1">
                                <a href="{{ route('pokemonDestroy', ['id' => $pokemon -> id]) }}">X</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </section>
@endsection