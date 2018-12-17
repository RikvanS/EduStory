@extends('layouts/setsail')

@section('content')

            <h2>Onderweg naar Visby</h2>
        <p class="sailtext">
            “Visssssby” schreeuwt Jan enthousiast, alsof hij een piraat is. 
            “De grootste stad van het eiland Gotland. Het staat bekend om haar lange stadsmuren, die het drukke handelscentrum goed beschermen. 
            Visby is een belangrijke plaats voor onze onderneming. Vanuit de Noordzee en de Oostzee is het te bereiken, ideaal voor een echte Hanzestad.”
        </p>
        <button type="button" class="continue" onclick="loadDoc('GET', '/storevisby', nextChapter, '/chapters/2a')">Arriveer in Visby</button>
        </div>
@endsection

<script src="{{ URL::asset('js/ajax.js') }}"></script>
