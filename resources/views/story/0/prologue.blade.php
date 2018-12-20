@extends('layouts/chapter')
@section('head')
<link rel="stylesheet" href="{{ URL::asset('css/prologue.css') }}">
<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/parallax.css') }}">

@endsection
@section('content')
<div class="proloog">
<div class="proloogtitel">
    <h1 class="proloogtext">Proloog</h1>
</div>
 <br>
    <p class="proloogtext">
    
     "Wat een drukte hier!" zeg je tegen jezelf. Je staat te wachten bij de A-brug in het centrum van Groningen. 
     Fietsers, auto's en stadsbussen rijden allemaal in rap tempo langs je heen. Je vindt eindelijk een rustig moment om over te steken. 
     Langs het water lopend verwonder je je over de gebouwen om je heen, ze zien er oud uit. Een balk steekt uit de bovenste verdieping van een pakhuis. 
     Je kijkt omhoog, en let niet op waar je loopt. Dan val je zomaar in het water!
    </p>
</div>


<section class="para" id="hero"> 
   
        <div class="layer layer-bg" data-speed="0.20"> </div>
        <div class="layer layer-one" data-speed="0.40"> </div>
        <div class="layer layer-two" data-speed="0.50"> </div>
        <div class="layer layer-three" data-speed="0.70"> </div>
        <div class="layer layer-four" data-speed="0.85"> </div>
        <div class="layer layer-five" data-speed="1.00"> </div>
 </section>
            
<div class="percamentus">
    <div class="color">
    
</div>

<div class="container">
<div>
    <p>
      Wat een schrik! Het duurt even voordat je doorhebt dat je gewoon in het water gevallen bent. Je komt boven water en opent je ogen weer. Je ziet de kade, en zwemt die kant op. 
      Gelukkig steekt iemand zijn hand uit en tilt je de kade op. De man lijkt totaal anders dan wat je gewend bent. Zijn kleding lijkt uit een toneelstuk te komen. 

      Je bent nog wel aan de A-kade, maar het lijkt anders dan eerder. Wat is er aan de hand? Alles lijkt net uit een film; het ziet er heel ouderwets uit.</p>
      <p>De grote ouderwetse pakhuizen zien er wel uit alsof ze nog maar net gebouwd zijn, er worden goederen in- en uitgeladen. Je ziet zakken met graan, wol en huiden voorbij komen. Het komt uit hele ouderwetse boten, niet uit de vrachtwagens die je hier normaal gesproken ziet laden en lossen.
      Je loopt iets verder en je komt bij het Reitdiep. Ook hier zijn mensen overal bezig, en ze lijken nog steeds verkleed te zijn.</p> 
      <p>Er komt een vrouw met een kind op de arm naar je toegelopen, ze reikt je een jas aan omdat je er zo koud en nat uitziet.
      
      Je bedankt haar en loopt een van de pakhuizen binnen om op te warmen. De inrichting is anders dan je gewend bent, maar je kan goed zien dat dit een gebouw is van mensen die veel geld verdienen. Er hangen schilderijen aan de muur.
    </p> 
</div>

<div class="container">
<div class="view-poll">
        <picture> <img src="/images/chapters/groningenkunst.jpg"> </picture>

      </div>
    </div>


<div>
    <p>
      "Mooi he?" hoor je achter je iemand zeggen. Je kijkt om en ziet een man staan. "De baas heeft dit schilderij speciaal laten maken, omdat hij zo trots is op onze mooie stad. De kunstenaar is er bijna drie jaar mee bezig geweest! Hij is er in 1390 al aan begonnen."
      1390? Voordat je verder kan vragen, neemt de man je mee naar buiten.
      "Ik heet trouwens Jan! Jij bent de nieuwe scheepshulp toch? Kom snel, want iedereen is net klaar met laden en lossen, we gaan zo varen. Maar voordat we wegvaren wil ik graag wel wat van je weten"
    </p>
</div>
@if(Auth::user()->progression->prologuenameage == true)
    @include('story/0/continue')
@else
<div id="change-div">
    <p>Wat is jouw naam?</p>
    @csrf
    <input id="name" name="name" type="input-text" class="text">
    <button class="change-btn" onclick="loadDoc('POST', '/chapters/prologue/checkname', changeDiv, 'change-div', 'name')">Bevestig</button>
</div>
@endif

</div>
</div>
@endsection

@section('scripts')
<script src="{{ URL::asset('js/ajax.js') }}"></script>
<script src="{{ URL::asset('js/parallax.js') }}"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/visbyeffect.js') }}"></script>
@endsection
