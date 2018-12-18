@extends('layouts/setsail')

@section('content')

    <p><h1 class="sailtext">Epiloog</h1></p>

    <p class="sailtext">
        Samen met de rest van de bemanning begin je aan de terugreis naar Groningen.
        Vanwege het koude weer in Riga, is het op het dek van het schip hardstikke koud! Je bent ook best moe, dus je gaat beneden deks om even bij te kunnen komen.
        Je hebt zoveel meegemaakt, dat je hoofd er bijna van draait! Zelfs Jan is stil. Tussen een lading stoffen, bestemd voor Groningse kooplieden, ga je even zitten.
    </p>
        <div class="sleeping">
        <span id="first">Z</span>
        <span id="second">Z</span>
        <span id="third">Z</span>
    <div id="dream-text">
    <p>Door het schommelen van de boot val je in een rustige, diepe slaap. Je droomt over de avonturen die je op deze reis beleefd hebt, maar ook over Groningen, 
       de plek waar je vandaan komt. </p>
    </div>
   
</div>
    <p class="sailtext">  "Hallo?"<br>
Langzaam wordt je wakker. "Hallo?" hoor je nog een keer. Jan zeker weer. "Jan, niet nu, ik ben hardstikke moe" antwoord je terwijl je probeert verder te slapen.  
"Ik ben geen Jan, en je moet wakker worden!" hoor je. Nu schrik je wakker! "Huh! Waar ben ik?" "Op mijn boot. Je was in het water gevallen."
Je bent nog helemaal slaperig en snapt er niks meer van. Je kijkt om je heen en ziet de binnenkant van een hele moderne woonboot. En een onbekende vrouw die je aanstaart. 
Waarom komt ze je zo bekend voor? Je ziet dat ze een warme deken over je heen heeft gelegd. "Je viel in het water. We hebben je er uit gehaald en warm gemaakt, 
maar je wou maar niet wakker worden. Gelukkig ben je weer wakker. Ik zal een taxi voor je bellen".<br>
Nadat je de vrouw bedankt hebt, ga je naar buiten voor de taxi. Je bent moe en je snapt niet helemaal wat er nou gebeurd is. Was alles nou een droom? 
Terwijl je aan het hoge der A staat te wachten, zoek je in je jaszak naar geld. Je telt je euro's, maar ziet er een onbekende muntstuk tussen. 
Is dat nou de florijn die Jan je had gegeven?.. 
    </p>
<div id="sky">
    <div id="End">
        <h1>Einde</h1>
        <h2>Het Hanze avontuur is ten einde</h2>
    </div>
</div>
<!--<a href="/chapters/1" onclick="loadDoc('GET', '/storelubeck', workplease)"> <button type="button" class="continue">Einde spel</button></a>--> 
 @endsection

 <script src="{{ URL::asset('js/ajax.js') }}"></script>
