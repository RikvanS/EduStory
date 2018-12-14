@extends('layouts/chapter')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/battleship.css') }}">

<p><h2>Visby</h2></p>

<p>Met een bezorgde blik op zijn gezicht, zie je de kapitein op jullie aflopen. Hij tikt Jan aan. "Denk je dat Stortebeker toch niet voor de haven van Visby rondvaart?" vraagt hij.
  "Misschien hebben we geluk gehad, kapitein" antwoord Jan. De sfeer voelt gespannen aan. "Wat is een stortebeker?" vraag je aan Jan. "Haha, Stortebeker is een <i>wie</i>. 
  Een beruchte Nederlandse piraat op deze wateren! Niet alleen de kustensteden hier op zee worden overvallen, maar ook onze Ijsselsteden als Kampen en Deventer."
  "Wow" antwoord je terug. Echte piraten.. wie had dat ooit gedacht! Je raakt in gedachten verzonken over de piratenverhalen die je kent. 
  <div class="container">
      <img src="/images/chapters/stortebeker.jpg"><br>
      <i>Piraat Stortebeker</i>
  </div>    
  Terwijl je over de horizon tuurt, schrik je van de bellen die opeens aan boord overal op het dek klinken.
  Met de haven van Visby in zicht, worden jullie toch nog verrast door een aanval van Piraten!</p>
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
<!-- onderstaande knop verwijderen voordat product live gaat, enkel voor testdoeleinden --> 
@if(Auth::user()->progression->visbybattleship == true)
  <button id="complete-battleship">Testknop spelvoltooiing</button>
 @endif


<div class='section-progress-div' id="sub-content" style="display:none;">

<p>Protagonist ontmoet een Finse handelaar die hem info geeft over Visby: een herdistributiestad die wordt lastiggevallen door piraten.</p>

<p>De protagonist slaat schapenhuiden in, deze wil de kapitein verkopen in Riga.</p>

<p>De boot is beschadigd tijdens het gevecht, en nu moet hij gerepareerd worden:</p>

<div id="diff-set">
  <input type="radio" name="diff" value="4" onclick="init();" checked> 4x4
  <input type="radio" name="diff" value="5" onclick="init();"> 5x5
  <input type="radio" name="diff" value="6" onclick="init();"> 6x6
</div>
<canvas id="canvas"></canvas>

<!-- onderstaande knop verwijderen voordat product live gaat, enkel voor testdoeleinden --> 
<br>
@if(Auth::user()->progression->visbyboatrepair == true)
<button id="complete-slide">Testknop spelvoltooiing</button>
@endif
<div style="display:none" id="progressdiv">
<p>Uiteindelijk gaat hij weer het schip in en gaat door naar Riga</p>
<p><a href="/chapters/2/setsail">Vaar naar Riga</a></p>
</div>
</div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/battleship.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slidegame.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
@endsection