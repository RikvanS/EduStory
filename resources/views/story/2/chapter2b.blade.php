@extends('layouts/chapter')

@section('content')
<p><h2>Bergen</h2></p>


<p>Hier komt een stuk verhaal waarin de Protagonist van alles over Bergen ontdekt.</p>

<p>Uiteindelijk gaat hij weer het schip in en gaat door naar de (voor nu) laatste stad.</p>

<canvas id="canvas"></canvas>

<div style="display:none" id="progressdiv">
<p><a href="/chapters/3">Vaar naar Riga</a></p>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/slidegame.js') }}"></script>
@endsection