<!DOCTYPE html>
<html>


<head>

<link rel="stylesheet" href="{{URL::asset('css/lubeck.css')}}">


</head>
<body>
@include("includes.sidebar")

<img src="/images/lubeck/rsz_lubeck.jpg" class="kenburns" width="1585" height="770" alt="market" usemap="#lubek">

<map name="lubek" id="Map">
<area alt="market" title="" href="market1.jpg" shape="rect" coords="637,504,729,556"/>
<area alt="art" title="" href="{{ url('chapters/1/artdealer') }}" shape="rect" coords="1351,462,1571,623" />
<area alt="plague" title="" href="{{ url('chapters/1/plague') }}" shape="poly" coords="372,397,370,451,487,441,530,442,549,452,611,434,627,448,666,444,671,408,665,364,673,353,675,342,678,336,678,319,652,317,646,302,642,278,577,271,518,254,487,277,450,276,428,289,399,315" />
</map>
<script src="{{ URL::asset('js/chapter.js') }}"></script>

</body>
</html>