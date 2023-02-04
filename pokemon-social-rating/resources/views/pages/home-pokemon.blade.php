@extends('layouts.main-layouts')

@section('head')
    <title>Home Pokemon</title>
@endsection

@section('main')
    <section id="home_pokemon">
        <h1>Home Pokemon</h1>

        <div class="col-4">
            <ul class="d-flex flex-column">
                @foreach ($pokemons as $pokemon)
                    <li>
                        <a href="{{ route('pokemonShow', ['id' => $pokemon -> id]) }}">
                            <div>
                                <img class="my_card" src="{{$pokemon -> img_link}}" alt="">
                            </div>
                            {{$pokemon -> name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </section>
@endsection