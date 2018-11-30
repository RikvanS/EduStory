@extends('layouts/chapter')

@section('content')

<body onload="init();">
    <p><h2>Prologue</h2></p>

<script type="text/javascript" src="{{ asset('js/slidegame.js') }}"></script>

<div>
    <p>Hier komt een stukje verhaal over iemand die in het water valt en wakker wordt in Groningen in de middeleeuwen. Iemand vraagt hem:</p>
</div>

<div id="change-div">
    <p>Wat is jouw naam?</p>
    @csrf
    <input id="name" name="name" type="text" class="text">
    <button onclick="loadDoc('POST', '/chapters/prologue/checkname', changeDiv, 'name')">Bevestig</button>
</div>

<br>
<canvas id="canvas"></canvas>

<div style="display:none" id="progressdiv">
<p><a href="/chapters/2">Door naar hoofdstuk 2</a></p>
</div>
</body>

@endsection

@section('scripts')
<script src="{{ URL::asset('js/ajax.js') }}"></script>
@endsection
