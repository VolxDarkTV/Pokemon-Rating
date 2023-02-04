@extends('layouts/main-layouts')

@section('main')
    <section id="create_pokemon" class="container mt-5">

        <div class="my_bg_color d-flex flex-column align-items-center gap-4 rounded-pill p-5">
            <h4 class="card p-2 bg-warning rounded-pill border border-dark border-2">Create YOUR Pokemon</h4>
            <form class="d-flex flex-column align-items-center gap-2" method="POST" action="{{ route('pokemonStore') }}">
                @csrf
    
                <div>
                    {{-- pokedex_n --}}
                    <input type="number" name="pokedex_n" id="pokedex_n" placeholder="Pokedex number">
                    {{-- <label for="pokedex_n">Pokedex number</label> --}}
    
                    {{-- name --}}
                    <input type="text" name="name" id="name" placeholder="Name">
                    {{-- <label for="name">Name</label> --}}
                </div>
                
                <div>
                    {{-- img_link --}}
                    <input type="url" name="img_link" id="img_link" placeholder="Link Image">
                    {{-- <label for="img_link">Link image</label> --}}
                    {{-- sex --}}
                    <input type="text" name="sex" id="sex" placeholder="Pokemon Sex">
                    {{-- <label for="sex">Sex</label> --}}
                </div>
    
                <div>
                    
                    {{-- type --}}
                    <input type="text" name="type" id="type" placeholder="Type">
                    {{-- <label for="type">Type</label> --}}
                    
                    {{-- type_weakness --}}
                    <input type="text" name="type_weakness" id="type_weakness" placeholder="Type Weakness">
                    {{-- <label for="type_weakness">Type weakness</label> --}}
                    
                    {{-- height --}}
                    <input type="text" name="height" id="height" placeholder="Height">
                    {{-- <label for="height">Height</label> --}}
                    
                    {{-- weight --}}
                    <input type="text" name="weight" id="weight" placeholder="Weight">
                    {{-- <label for="weight">Weight</label> --}}
                </div>
                
                
                
                {{-- ability --}}
                <input type="text" name="ability" id="ability" placeholder="Ability">
                {{-- <label for="ability">Ability</label> --}}
                
                {{-- category --}}
                <input type="text" name="category" id="category" placeholder="Category">
                {{-- <label for="category">Category</label> --}}
                
                {{-- lv --}}
                <input type="number" name="lv" id="lv" placeholder="Lv">
                {{-- <label for="lv">Lv</label> --}}
                
                {{-- description --}}
                {{-- <input type="text" name="description" id="description" placeholder="Description"> --}}
                {{-- <label for="description">Description</label> --}}
                <h5>Description</h5>
                <textarea name="description" id="" cols="30" rows="2" placeholder="Describe your Pokemon"></textarea>
                <input type="submit" value="Create YOUR first pokémon now!!">
            </form>
        </div>
    </section>

@endsection