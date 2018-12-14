@extends('layouts/setsail')

@section('content')

            <h2>Onderweg naar Visby</h2>
        <p class="sailtext">
            “Visssssby” schreeuwt Jan enthousiast, alsof hij een piraat is. 
            “De grootste stad van het eiland Gotland. Het staat bekend om haar lange stadsmuren, die het drukke handelscentrum goed beschermen. 
            Visby is een belangrijke plaats voor onze onderneming. Vanuit de Noordzee en de Oostzee is het te bereiken, ideaal voor een echte Hanzestad.”
        </p>
        <a href="/chapters/2a" onclick="loadDoc('GET', '/storevisby', workplease)"> <button type="button" class="continue">Arriveer in Visby</button></a> 
        </div>
@endsection

<script src="{{ URL::asset('js/ajax.js') }}"></script>
