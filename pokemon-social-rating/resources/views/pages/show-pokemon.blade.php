@extends('layouts.main-layouts')

@section('head')
    <title>Show Pokemon</title>
@endsection

@section('main')
<section id="show_pokemon" class="container">

    <div class="d-flex flex-column align-items-center">
        <div class="card text-center">
            <h2>{{$pokemon -> name}}</h2>
            <div class="d-flex justify-content-center">
                <div class="my_level border border-warning border-5 d-flex align-items-center justify-content-center bg-success">
                    <span>LV. {{$pokemon -> lv}}</span>
                </div>
            </div>
            <div>
                <img class="my_card" src="{{$pokemon -> img_link}}" alt="">
            </div>

            {{-- Pokedex & Gender --}}
            <div class="d-flex align-items-center p-3">
                <div class="col-6">
                    <span class="btn btn-warning text-dark">Pokedex N° {{$pokemon -> pokedex_n}}</span>
                </div>
                <div class="col-6">
                    <span class="btn btn-danger text-light">{{$pokemon -> sex}}</span>
                </div>
            </div>

            {{-- Details --}}
            <div class="d-flex bg-primary rounded p-2 m-2">

                <div class="col-6">
                    <div class="p-1">
                        <h5 class="text-light">Height</h5>
                        <span class="fs-5">"{{$pokemon -> height}}"</span>
                    </div>
                    <div class="p-1">
                        <h5 class="text-light">Weight</h5>
                        <span class="fs-5">{{$pokemon -> weight}}</span>
                    </div>
                    <div class="p-1">
                        <h5 class="text-light">Gender</h5>
                        <span>"{{$pokemon -> sex}}"</span>
                    </div>
                    
                </div>
                <div class="col-6">
                    <div class="p-1">
                        <h5 class="text-light">Gender</h5>
                        <span>"{{$pokemon -> category}}"</span>
                    </div>
                    <div class="p-1">
                        <h5 class="text-light">Gender</h5>
                        <span>"{{$pokemon -> ability}}"</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
@endsection