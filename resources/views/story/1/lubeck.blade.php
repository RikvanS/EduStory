<!DOCTYPE html>
<html>


<head>

<link rel="stylesheet" href="{{URL::asset('css/lubeck.css')}}">


</head>
<body>
@include("includes.sidebar")

<div style="width:100%;">
        <img id="map" src="/images/lubeck/rsz_lubeck.jpg" usemap="#lubek" border="0" width="100%" height="100%" alt="" />

<map name="lubek" id="lubek">

<area alt="art" title="" href="{{ url('chapters/1/artdealer') }}" shape="rect" coords="1351,462,1571,623" />
<area alt="plague" title="" href="{{ url('chapters/1/plague') }}" shape="poly" coords="372,397,370,451,487,441,530,442,549,452,611,434,627,448,666,444,671,408,665,364,673,353,675,342,678,336,678,319,652,317,646,302,642,278,577,271,518,254,487,277,450,276,428,289,399,315" />
</map>

</div>
@if(Auth::user()->progression->lubeckstory == true)
<a href="/chapters/1">terug</a>
@endif
<script src="{{ URL::asset('js/lubeck.js') }}"></script>
<script src="{{ URL::asset('js/chapter.js') }}"></script>
<script src="{{ URL::asset('js/resize.js') }}"></script>

</body>
</html>