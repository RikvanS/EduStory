@extends('layouts/chapter')

@section('content')
<div id="visby-head-image" class="head-image">
    <img class="parchment-border" src="/images/chapters/parchment-top.png">
</div>
<link rel="stylesheet" href="{{ URL::asset('css/battleship.css') }}">

<div class="chapter-title">visby</div>

<p>Met een bezorgde blik op zijn gezicht, zie je de kapitein op jullie aflopen. Hij tikt Jan aan. "Denk je dat Stortebeker toch niet voor de haven van Visby rondvaart?" vraagt hij.
  "Misschien hebben we geluk gehad, kapitein" antwoord Jan. De sfeer voelt gespannen aan. "Wat is een stortebeker?" vraag je aan Jan. "Haha, Stortebeker is een persoon. 
  Een beruchte Nederlandse piraat op deze wateren! Niet alleen de kuststeden hier op zee worden overvallen, maar ook onze Ijsselsteden als Kampen en Deventer."
  "Wow" antwoord je terug. Echte piraten.. wie had dat ooit gedacht! Je raakt in gedachten verzonken over de piratenverhalen die je kent. </p>
  
  
  <div class="container">
      <img src="/images/chapters/stortebeker_rsz.jpg"><br>
      <i>Piraat Stortebeker</i>
    </div> 

    

 <p> Terwijl je over de horizon tuurt, schrik je van de bellen die opeens aan boord overal op het dek klinken.
  Met de haven van Visby in zicht, worden jullie toch nog verrast door een aanval van piraten!
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

<p>Op het nippertje zijn jullie aan de piraten ontkomen en varen jullie snel de haven van Visby binnen. Terwijl de vaste bemannening begint met hun taken, neemt Jan je mee. 
  "Komop  {{ Auth::user()->name }}" zegt Jan, "We zijn hier niet voor niks! We moeten nog scheepshuiden kopen voor onze handel in Riga." Samen met je reisgenoot loop je door de mensen, totdat Jan een bekend gezicht ziet. 
  "Lars!" roept Jan uit. Een lange, blonde man draait zich om en begroet Jan met een flinke handdruk. Daarna kijkt Lars naar jou, pakt je hand en schud hem zo stevig dat je je hand bijna geplet voelt worden. 
  Jan ziet het en geeft je met een schaterlach nog een flinke schouderklop toe. "Bij handelen hoort een stevige handdruk!" legt hij uit. </p>
<p>Terwijl jullie de schaapshuiden naar de boot brengen, komt er een jongen nieuwsgierig bij jullie kijken. 
  "Wat een mazzel dat jullie de piraten hebben overleefd!" zegt het jongetje die bij jullie is komen staan. "Absoluut!" Roept Jan uit. "Maar helaas is ons schip wel beschadigd geraakt.
  Laten we iemand zoeken die het schip kan repareren. Misschien kan jij ons helpen door deze puzzel op te lossen."
</p>

<div class="container">
<div id="diff-set">
  <input type="radio" name="diff" value="4" onclick="init();" checked> 4x4
  <input type="radio" name="diff" value="5" onclick="init();"> 5x5
  <input type="radio" name="diff" value="6" onclick="init();"> 6x6
</div>
<canvas id="canvas"></canvas>

<br>
@if(Auth::user()->progression->visbyboatrepair == true)
<div id="complete-slide" class="game-completed"><div id="text-padding">Ik heb dit spel al eens gespeeld, ik wil door met het verhaal!</div></div>
</div>
@endif
<div style="display:none" id="progressdiv">

  <p>"Ons mooie koggeschip is weer zo goed als nieuw! laten we snel aan boord gaan."</p>
<div class="travel-center">
<button type="button" id="button-d" class="button" onclick="loadDoc('GET', '/storesetsail3', nextChapter, '/chapters/2/setsail')">Vaar naar Riga</button>
</div>
</div>
</div>

@endsection

@section('scripts')	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/battleship.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slidegame.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
@endsection