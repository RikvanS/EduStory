@extends('layouts/chapter')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/battleship.css') }}">

<p><h2>Visby</h2></p>

<p>Als het schip Visby nadert, wordt het aangevallen door piraten! Hier komt een zeeslagspelletje.</p>
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
<p>Na de slag neemt de protagonist een scheepsmaat mee naar de ziekenhuiskerk.</p>

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
<p><a href="/chapters/2/setsail" onclick="loadDoc('GET', '/storesetsail3', workplease)">Vaar naar Riga</a></p>
</div>
</div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/battleship.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slidegame.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
@endsection