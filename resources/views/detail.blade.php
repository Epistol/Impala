@extends('layouts.general')
@include('layouts.headersmall')

@section('content')




    <div id="modifiersDiv"></div>

    <div class="section filmsfront">
        <div class="container">


            <div class="columns">

                <div class="column">
                    <h2 class="title">

                       {{ $film["title"] }}
                    </h2>

                    <figure class="image ">
                        <img src="https://image.tmdb.org/t/p/w780/{{$film["poster_path"]}}" alt="Image">
                    </figure>


                </div>


            </div>

        </div>
    </div>


@endsection