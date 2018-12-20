@extends('layouts/setsail')

@section('content')

            <p><h1 class="sailtext">Onderweg naar Lübeck</h1></p>
    <p class="sailtext">"Wat een wind hè?" roept Jan, terwijl hij je op het schip rondleidt. Je ziet Groningen steeds kleiner worden terwijl jullie wegvaren. Jan laat je zien waar je kunt slapen en legt je uit wat jouw werk wordt tijdens de reis. "Nou {{ Auth::user()->name }}, je bent eigenlijk ons manusje-van-alles. Je meeste werk bestaat uit goederen verplaatsen en afleveren. Hebben ze je eigenlijk al wat over de reis verteld?" vraagt Jan. "Nee," zeg je, "ik heb alleen gehoord dat we naar Lübeck gaan." "Dat klopt," zegt Jan, "en daarna via Visby naar Riga. Dat zijn allemaal Hanzesteden dus daar kunnen we goed handel drijven." Je hebt geen idee wat Hanzesteden zijn, maar Jan legt het je maar al te graag uit. Blijkbaar is het een handelssamenwerking tussen tientallen Europese steden.</p>
            
        <p class="sailtext">"Ben je al eens eerder in Lübeck geweest?"
            "Ik geloof van niet" antwoord je. Jan houdt maar niet op met praten. "Lübeck is de plaats waar onze handelssamenwerking is ontstaan!
            Al vanaf de 12e eeuw hebben ze economische verdragen gemaakt met andere steden. Heel goed voor de handel. Daarom doen wij er als Groningers ook aan mee. Ze kopen hier onder andere heel erg veel stoffen in.
            De "Koningin van de Hanze" noemen ze deze stad ook wel."</p>
        <div class="button-container"><button type="button" class="continue" onclick="loadDoc('GET', '/storelubeck', nextChapter, '/chapters/1')">Arriveer in Lubeck</button></div>

 @endsection

 <script src="{{ URL::asset('js/ajax.js') }}"></script>