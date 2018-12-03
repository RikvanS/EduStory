@extends('layouts/chapter')

@section('content')

<p><h2>Visby</h2></p>

<p>Als het schip Visby nadert, wordt het aangevallen door piraten! Hier komt een zeeslagspelletje.</p>

<p>Na de slag neemt de protagonist een scheepsmaat mee naar de ziekenhuiskerk.</p>

<p>Protagonist ontmoet een Finse handelaar die hem info geeft over Visby: een herdistributiestad die wordt lastiggevallen door piraten.</p>

<p>De protagonist slaat schapenhuiden in, deze wil de kapitein verkopen in Riga.</p>

<p>De boot is beschadigd tijdens het gevecht, en nu moet hij gerepareerd worden:</p>


<canvas id="canvas"></canvas>

<div style="display:none" id="progressdiv">
<p>Uiteindelijk gaat hij weer het schip in en gaat door naar Riga</p>
<p><a href="/chapters/2/setsail">Vaar naar Riga</a></p>
</div>
@endsection

@section('scripts')
<script src="{{ URL::asset('js/ajax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slidegame.js') }}"></script>
@endsection