@extends('layouts/setsail')

@section('content')

            <h2>Onderweg naar Gdansk</h2>
    <p class="sailtext">
         Je bent weer aan boord van het schip, ditmaal beneden het dek. Je bent net in gedachten verzonken, wanneer Jan alweer naast je komt zitten. 
         “Gdansk! Wat een gekke naam he? We noemen het ook wel Danzig hoor, in Holland. Ondanks de Duitstalige overheersing, wonen er hier mensen vanuit heel Europa. 
         Scandinavische, Engelse en Schotse kooplieden! Handig om je talen te oefenen. <i> Willkommen in Gdansk! </i> ”
    </p>
    <button type="button" class="continue" onclick="loadDoc('GET', '/storedanzig', nextChapter, '/chapters/2b')">Arriveer in Gdansk</button>
    </div>
@endsection

<script src="{{ URL::asset('js/ajax.js') }}"></script>