@extends('layouts/setsail')

@section('content')

            <h2>Onderweg naar Riga</h2>
    <p class="sailtext">
                Wat een avonturen.. Je kan het nog bijna niet geloven wat je allemaal hebt meegemaakt! Nu varen jullie naar de eindbestemming van deze reis; Riga. 
                Nog voordat je hem iets over Riga kan vragen, begint Jan vol enthousiasme te vertellen “Zo een mooi stad is dit {{ Auth::user()->name }} , vol prachtige gebouwen! 
                Een heel bekend gebouw is het <i> Zwarthoofdenhuis </i> ,  een Gildehuis voor Duitse kooplieden.” 
                “Wat is een gildehuis?” vraag ik aan hem. “Dat vertel ik je wel wanneer we aangekomen zijn!” 
    </p>
    <button type="button" class="continue" onclick="loadDoc('GET', '/storeriga', nextChapter, '/chapters/3')">Arriveer in Riga</button>
        </div>
@endsection

<script src="{{ URL::asset('js/ajax.js') }}"></script>