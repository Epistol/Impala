@extends('layouts.general')
@include('layouts.headerbig')

@section('content')




        <div class="section">
        <div class="columns">
            <div class="column">
                <div class="field has-addons">
                    <div class="control frontpage">
                        <form method="POST" action="{{route('detailssearch')}}">
                            {{ csrf_field() }}
                        <input class="input" name="search" id="autocomplete" type="text" placeholder="Find a repository">
                            <input type="hidden" id="id_movie" name="id_movie" />
                            <button class="is-hidden" type="submit" class="button">Button</button>
                        </form>
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
                                        <img src="https://image.tmdb.org/t/p/w500_and_h281_bestv2/{{$film["poster_path"]}}" alt="Image">
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