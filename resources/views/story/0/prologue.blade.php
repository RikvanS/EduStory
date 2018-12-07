@extends('layouts/chapter')

@section('content')

    <p><h2>Proloog</h2></p>

<div>
    <p>
     "wat een drukte hier!" zeg je tegen jezelf. Je staat te wachten bij de A-brug in het centrum van Groningen. 
     Fietsers, auto's en stadsbussen rijden allemaal in rap tempo langs je. Je vindt eindelijk een rustig moment om over te steken. 
     Langs het water lopend verwonder je je over de gebouwen waar je langs loopt, ze zien er oud uit. Een balk steekt uit de bovenste verdieping van een pakhuis. 
     Je kijkt omhoog, en let niet op waar je loopt. Je stapt zo in het water!
    </p>
</div>

<div>
    <p>Paralax van golven terwijl de protagonist in het water valt hier</p>
</div>

<div>
    <p>
      Wat een schrik! het duurt een moment voordat je doorhebt dat je gewoon in het water gevallen bent. Je komt boven water en opent je ogen weer. Je ziet de kade, en zwemt die kant op. 
      Gelukkig steekt iemand zijn hand uit, en die tilt je de kade op. De man lijkt totaal anders dan wat je bent gewend. Zijn kleding lijkt uit een toneelstuk te komen. 
      Je bent nog wel aan de A kade, maar het lijkt anders dan eerder. Wat is er aan de hand? Alles lijkt net uit een film, of heel ouderwets.
      De grote pakhuizen zien er nieuw uit. Er worden goederen in en uit geladen. Je ziet zakken met graan, wol en huiden voorbij komen. Het komt uit hele ouderwetse boten, niet de vrachtwagens die je normaal bij de winkel ziet.
      Je loopt iets verder en je komt bij het Reitdiep. Ook hier zijn mensen overal bezig, en ze lijken nog steeds verkleed te zijn. Er komt een vrouw met een kind op de arm naar je toegelopen, ze reikt je een jas aan omdat je er zo koud en nat uitziet.
      Je bedankt haar en loopt een van de pakhuizen binnen om op te warmen. De inrichting is anders dan je gewend bent, maar je kan goed zien dat dit een gebouw is van mensen die goed verdienen. Er hangen schilderijen aan de muur.
    </p> 
</div>
<div class="container">
      <img src="../images/chapters/groningenkunst.jpg">
</div>
<div>
    <p>
      "Mooi he?" hoor je achter je iemand zeggen. Je kijkt om en ziet een man staan. "De baas heeft dit schilderij vorig jaar gekregen, omdat hij zo trots is op onze mooie stad".
      "Vorig jaar?" hoor je jezelf zeggen. "Ja" zegt de man, "in 1390 is de kunstenaar er aan begonnen". 1390? Voordat je verder kan vragen, neemt de man je mee naar buiten.
      "Ik heet trouwens Jan! Jij bent de nieuwe scheepshulp toch? Kom snel, want iedereen is net klaar met laden en lossen, we gaan zo varen. Maar voordat we wegvaren wil ik graag wel wat van je weten"
    </p>
</div>

<div id="change-div">
    <p>Wat is jouw naam?</p>
    @csrf
    <input id="name" name="name" type="text" class="text">
    <button onclick="loadDoc('POST', '/chapters/prologue/checkname', changeDiv, 'change-div', 'name')">Bevestig</button>
</div>

<br>

</body>

@endsection

@section('scripts')
<script src="{{ URL::asset('js/ajax.js') }}"></script>
@endsection
