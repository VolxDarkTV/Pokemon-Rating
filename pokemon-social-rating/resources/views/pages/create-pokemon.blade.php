@extends('layouts/main-layouts')

@section('main')
    <section>

        <h1>CREATE NEW SAINT</h1>
        <form method="POST" action="{{ route('pokemonStore') }}">
            @csrf
            
            {{-- pokedex_n --}}
            <input type="number" name="pokedex_n" id="pokedex_n">
            <label for="pokedex_n">pokedex_n</label>
            <br>
            {{-- img_link --}}
            <input type="url" name="img_link" id="img_link">
            <label for="img_link">img_link</label>
            <br>
            {{-- name --}}
            <input type="text" name="name" id="name">
            <label for="name">name</label>
            <br>
            {{-- sex --}}
            <input type="text" name="sex" id="sex">
            <label for="sex">sex</label>
            <br>
            {{-- type --}}
            <input type="text" name="type" id="type">
            <label for="type">type</label>
            <br>
            {{-- type_weakness --}}
            <input type="text" name="type_weakness" id="type_weakness">
            <label for="type_weakness">type_weakness</label>
            <br>
            {{-- height --}}
            <input type="text" name="height" id="height">
            <label for="height">height</label>
            <br>
            {{-- weight --}}
            <input type="text" name="weight" id="weight">
            <label for="weight">weight</label>
            <br>
            {{-- ability --}}
            <input type="text" name="ability" id="ability">
            <label for="ability">ability</label>
            <br>
            {{-- category --}}
            <input type="text" name="category" id="category">
            <label for="category">category</label>
            <br>
            {{-- lv --}}
            <input type="number" name="lv" id="lv">
            <label for="lv">lv</label>
            <br>
            {{-- description --}}
            <input type="text" name="description" id="description">
            <label for="description">description</label>
            <br>
            <input type="submit" value="Crea il TUO Pokemon">
        </form>
    </section>

@endsection