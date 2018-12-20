@extends('layouts/chapter')

@section('content')
<div id="visby-head-image" class="head-image">
    <img class="parchment-border" src="/images/chapters/parchment-top.png">
</div>
<link rel="stylesheet" href="{{ URL::asset('css/battleship.css') }}">

<div class="chapter-title">visby</div>

<p>Met een bezorgde blik op zijn gezicht loopt de kapitein op jullie af. Hij tikt Jan aan. "Denk je dat Stortebeker misschien toch niet voor de haven van Visby rondvaart?" vraagt hij.
  "Misschien hebben we geluk gehad, kapitein" antwoordt Jan. De sfeer voelt gespannen aan. "Wat is een stortebeker?" vraag je aan Jan. "Haha, Stortebeker is een persoon. 
  Een beruchte piraat op deze wateren! Niet alleen de kuststeden hier worden overvallen, maar ook onze IJsselsteden zoals Kampen en Deventer."
  "Wow" antwoord je terug. Echte piraten.. wie had dat ooit gedacht! Je raakt in gedachten verzonken over de piratenverhalen die je kent. </p>
  


    {{-- <span></span> --}}
<div class="fadein">
    <img src="/images/chapters/stortebeker_rsz.jpg"><br>
<i>Piraat Stortebeker</i>
</div>

{{-- <span></span> --}}

 <p> Terwijl je over de horizon tuurt, schrik je van de bellen die opeens overal op het dek klinken.</p>
  <p>Met de haven van Visby in zicht, worden jullie toch nog verrast door een aanval van piraten!
  Verdedig jezelf door je vloot goed te plaatsen, en daarna de locatie van de boten van de piraat te vinden! 
  De rode stippen geven aan dat je de boot van de tegenstander hebt geraakt. Wie als eerste alle boten van de ander heeft laten zinken, heeft gewonnen.</p>
<div id="main">
    <div class="board">
      <div class="displays">
        <div class="top">
          <ul class="grid"></ul>
        </div>
        <div class="bottom">
          <ul class="grid"></ul>
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="topPanel">
        <div class="layout">
          <div class='buttons one'>Begin het gevecht!</div>
          <div class='buttons multi' style="display:none"></div>
        </div>
      </div>
      <div class='console'>
        <span class='text'></span></div>
    </div>
  </div>

@if(Auth::user()->progression->visbybattleship == true)
  <div id="complete-battleship" class="game-completed"><div id="text-padding">Ik heb dit spel al eens gespeeld, ik wil door met het verhaal!</div></div>
 @endif


<div class='section-progress-div' id="sub-content" style="display:none;">

<p>Op het nippertje zijn jullie aan de piraten ontkomen. Jullie varen snel de haven van Visby binnen. Terwijl de vaste bemannening begint met hun taken, neemt Jan je mee. 
  "Komop  {{ Auth::user()->name }}" zegt Jan, "We zijn hier niet voor niks! We moeten nog schaapshuiden kopen voor onze handel in Riga." Samen met je reisgenoot loop je door de mensen, totdat Jan een bekend gezicht ziet. 
  "Lars!" roept Jan uit. Een lange, blonde man draait zich om en begroet Jan met een flinke handdruk. Daarna kijkt Lars naar jou, pakt je hand en schudt hem zo stevig dat je hand bijna geplet wordt. 
  Jan ziet het en geeft je met een schaterlach nog een flinke schouderklop toe. "Bij handelen hoort een stevige handdruk!" legt hij uit. </p>
<p>Terwijl jullie de schaapshuiden naar de boot brengen, komt er een jongen nieuwsgierig bij jullie kijken. 
  "Wat een mazzel dat jullie de piraten hebben overleefd!" zegt het jongetje dat bij jullie is komen staan. "Absoluut!" Roept Jan uit. "Maar helaas is ons schip wel beschadigd.
  Laten we iemand zoeken die het schip kan repareren."</p> 
  <p>Repareer het schip! Los deze puzzel op.</p>

<div class="container">
<div id="diff-set">
  <p>Kies de moeilijkheidsgraad</p>
  <input type="radio" name="diff" value="4" onclick="init();" checked> Makkelijk
  <input type="radio" name="diff" value="5" onclick="init();"> Gemiddeld
  <input type="radio" name="diff" value="6" onclick="init();"> Moeilijk
</div>
<canvas id="canvas"></canvas>

<br>
@if(Auth::user()->progression->visbyboatrepair == true)
<div id="complete-slide" class="game-completed"><div id="text-padding">Ik heb dit spel al eens gespeeld, ik wil door met het verhaal!</div></div>
</div>
@endif
<div style="display:none" id="progressdiv">

  <p>"Ons mooie koggeschip is weer zo goed als nieuw! laten we snel aan boord gaan." Snel klimmen jullie aan boord. Op naar de volgende bestemming! </p>
<div class="travel-center">
<button type="button" id="button-d" class="button" onclick="loadDoc('GET', '/storesetsail3', nextChapter, '/chapters/2/setsail')">Vaar naar Riga</button>
</div>
</div>
</div>
<div id="chapter-bottom-div">
  </div>
@endsection

@section('scripts')	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/battleship.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/visbyeffect.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slidegame.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
@endsection