@extends('layouts/setsail')

@section('content')

            <h2>Onderweg naar Riga</h2>
    <p class="sailtext">"Wat een wind he?" roept Jan, terwijl hij je het schip rondleidt. Je ziet Groningen steeds kleiner worden terwijl jullie wegvaren. "Ben je al eens eerder in Lubeck geweest?"
            "Ik geloof van niet" antwoord je. Jan houdt maar niet op met praten. "Lubeck is de plaats waar onze handelssamenwerking is onstaan!
            Al vanaf de 12e eeuw hebben ze economische verdragen gemaakt met andere steden. Heel goed voor de handel. Daarom doen wij er als Groningers ook aan mee. Ze kopen hier onder andere heel erg veel stoffen in.
            De "Koningin van de Hanze" noemen ze deze stad ook wel."</p>
    <a href="/chapters/3" onclick="loadDoc('GET', '/storeriga', workplease)"><button type="button" class="continue">Arriveer in Riga</button></a> 
@endsection

<script src="{{ URL::asset('js/ajax.js') }}"></script>