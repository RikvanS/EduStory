@extends('layouts/setsail')

@section('content')

            <p><h1 class="sailtext">Onderweg naar Visby</h1></p>
        <p class="sailtext">
            “Visssssby” schreeuwt Jan enthousiast, alsof hij een piraat is. 
            “De grootste stad van het eiland Gotland. Het staat bekend om haar lange stadsmuren, die het drukke handelscentrum goed beschermen. 
            Visby is een belangrijke plaats voor onze onderneming. Vanuit de Noordzee én de Oostzee is het goed te bereiken, ideaal voor een echte Hanzestad.”
        </p>
        <div class="button-container"><button type="button" class="continue" onclick="loadDoc('GET', '/storevisby', nextChapter, '/chapters/2a')">Arriveer in Visby</button>
        </div>
        </div>
@endsection

<script src="{{ URL::asset('js/ajax.js') }}"></script>
