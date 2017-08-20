@extends('layouts.general')


@section('content')

    @include('layouts.headersmall')


    <div id="modifiersDiv"></div>

    <div class="section filmsfront">



        <div class="columns">

            <div class="column affiche">
                <div class="affiche">

                    <img style="width: 15rem;" src="https://image.tmdb.org/t/p/w500/{{$film["poster_path"]}}" alt="Image">


                    <div id="example-2">
                        <button v-on:click="addMovie({{$film["id"]}})"  class="favhover">
                            <p>+</p>
                        </button>
                    </div>
                </div>

            </div>
            <div class="column is-two-thirds">
                <h2 class="title contenu">

                    {{ $film["title"] }}
                </h2>
                <p>
                    {{ $film["overview"] }}
                </p>

            </div>


        </div>

    </div>


@endsection