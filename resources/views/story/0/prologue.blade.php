@extends('layouts/app')

@section('content')
<body onload="init();">

<p>Prologue</p>
{{-- 
    <div id="canvascontainer"> --}}
    <canvas id="canvas"></canvas>
    {{-- </div> --}}
    <div style="display:none" id="progressdiv">
    <p><a href="/chapters/2">Door naar hoofdstuk 2</a></p>
    </div>



<p><a href="/chapters/1a">Choice A</a></p>

<p><a href="/chapters/1b">Choice B</a></p>
</body>
@endsection
<script type="text/javascript" src="{{ asset('js/slidegame.js') }}"></script>