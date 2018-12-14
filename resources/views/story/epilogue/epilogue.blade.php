@extends('layouts/setsail')

@section('content')

<div class="chapter-title">epiloog</div>


    <p class="sailtext">"Wat een wind he?" roept Jan, terwijl hij je het schip rondleidt. Je ziet Groningen steeds kleiner worden terwijl jullie wegvaren. "Ben je al eens eerder in Lubeck geweest?"
            "Ik geloof van niet" antwoord je. Jan houdt maar niet op met praten. "Lubeck is de plaats waar onze handelssamenwerking is onstaan!
            Al vanaf de 12e eeuw hebben ze economische verdragen gemaakt met andere steden. Heel goed voor de handel. Daarom doen wij er als Groningers ook aan mee. Ze kopen hier onder andere heel erg veel stoffen in.
            De "Koningin van de Hanze" noemen ze deze stad ook wel."</p>
        <div class="sleeping">
        <span id="first">Z</span>
        <span id="second">Z</span>
        <span id="third">Z</span>
    <div id="dream-text">
    <p>Door het schommelen van de boot val je in een rustige, diepe slaap. Je droomt over de avonturen die je op deze reis beleefd hebt, maar ook over Groningen, de plek waar je vandaan komt. </p>
    </div>
</div>
<div id="sky">
    <div id="End">
        <h1>Einde</h1>
        <h2>Het Hanze avontuur is ten einde</h2>
    </div>
</div>
<!--<a href="/chapters/1" onclick="loadDoc('GET', '/storelubeck', workplease)"> <button type="button" class="continue">Einde spel</button></a>--> 
 @endsection

 <script src="{{ URL::asset('js/ajax.js') }}"></script>