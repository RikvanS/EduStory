@extends('layouts/chapter')

@section('content')
<p><h2>Visby</h2></p>

<p>Hier komt een stuk verhaal in Visby.</p>

<canvas id="canvas"></canvas>

<div style="display:none" id="progressdiv">
<p>Uiteindelijk gaat hij weer het schip in en gaat door naar Riga</p>
<p><a href="/chapters/2/setsail">Vaar naar Riga</a></p>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/slidegame.js') }}"></script>
@endsection