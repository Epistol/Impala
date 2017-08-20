
<div class="headersection">
    <nav class="">
        <div class="columns">
            <div class="column">
                <div class="logo">
                    <img class="logosmall" src="{{asset('img/logored.png')}}">
                    <div class="logo-text-group">
                        <h1 class="titrelogo"><span>Impamovie</span></h1>
                    </div>
                </div>


            </div>
            <div class="column logo">
                <form class="headerlogo" method="POST" action="{{route('detailssearch')}}">
                    {{ csrf_field() }}
                    <input class="input headerlogo" name="search" id="autocomplete" type="text" placeholder="Titre, acteur, ...">
                    <input type="hidden" id="id_movie" name="id_movie" />
                    <button class="is-hidden" type="submit" class="button">Button</button>
                </form>
            </div>
            <div class="column logo">
                <p>Ma liste</p>
            </div>
        </div>
    </nav>

</div>