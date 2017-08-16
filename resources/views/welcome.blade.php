@extends('layouts.general')


@section('content')


    <div class="section">
        <div class="columns">
            <div class="column">
                <div style="display:flex;justify-content:center;align-items:center;">
                    <div><img src="{{asset('img/logored.png')}}">
                        <div class="logo-text-group">
                            <h1 class="titrelogo"><span>Impamovie</span></h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field has-addons">
                    <div class="control frontpage">
                        <input class="input" id="autocomplete" type="text" placeholder="Find a repository">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modifiersDiv"></div>

    <div class="section filmsfront">
        <div class="container">

            <h2 class="title">Top films de l'année</h2>

            <div class="test">

            </div>
            <div class="columns">
                @php
                    $i = 0;
                @endphp

                @foreach($datas as $post)
                    @foreach($post as $film)

                        @php
                            $i++
                        @endphp


                        <div class="column">



                            <div class="card">
                                <div class="card-image">
                                    <figure class="image ">
                                        <img src="https://image.tmdb.org/t/p/w300/{{$film["poster_path"]}}" alt="Image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">

                                        <div class="media-content">
                                            <p class="title is-4">{{$film["title"]}}</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        @if ($i % 5 == 0  )
                            </div>
                            <div class="columns">
                          @endif

                                @if ($i > 9 )
                                    @break
                                @endif
                @endforeach
                @endforeach
            </div>

        </div>
    </div>


    <p>Test</p>

@endsection