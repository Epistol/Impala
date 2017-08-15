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
                        <input class="input" type="text" placeholder="Find a repository">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section filmsfront">

        @foreach($datas as $post)
            @foreach($post->results as $film)
                <p>{{$film->title}}</p>


            @endforeach
        @endforeach

    </div>


    <p>Test</p>

@endsection