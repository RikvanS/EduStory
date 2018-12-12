@extends('layouts/chapter')

@section('content')
<link rel="stylesheet" href="{{URL::asset('css/lubeck.css')}}">

<img src="/images/lubeck/rsz_lubeck.jpg" class="kenburns" width="1585" height="770" alt="market" usemap="#lubek">

<map name="lubek" id="Map">
<area alt="market" title="" href="market1.jpg" shape="rect" coords="637,504,729,556"/>
<area alt="art" title="" href="{{ url('chapters/1/artdealer') }}" shape="rect" coords="1351,462,1571,623" />
<area alt="plague" title="" href="{{ url('chapters/1/plague') }}" shape="poly" coords="372,397,370,451,487,441,530,442,549,452,611,434,627,448,666,444,671,408,665,364,673,353,675,342,678,336,678,319,652,317,646,302,642,278,577,271,518,254,487,277,450,276,428,289,399,315" />
</map>



<p> Vlak voor jullie willen vertrekken, komt er een scheepsjongen aangerend. Hij heeft slecht nieuws: er gaan geruchten over piraten in Visby.
    Wil je toch naar Visby? Of beter een andere route?</p>

<div class="buttons" style="display:none" id="progressdiv"> 
    @if(Auth::user()->progression->lubeckchoice == 0)
    <a href="/chapters/1/setsail1a"><button type="button" id="button-a" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice1', workplease)">Vaar naar Visby</button></a>
    <a href="/chapters/1/setsail1b"><button type="button" id="button-b" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice2', workplease)">Vaar naar Gdansk</button></a>
    @endif

    @if(Auth::user()->progression->lubeckchoice == 1)
    <a href="/chapters/1/setsail1a"><button type="button" id="button-a" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice1', workplease)">Vaar naar Visby</button></a>
    @endif

    @if(Auth::user()->progression->lubeckchoice == 2)
    <a href="/chapters/1/setsail1b"><button type="button" id="button-b" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice2', workplease)">Vaar naar Gdansk</button></a>
    @endif
</div>    



@endsection

@section('scripts')
<script src="{{ asset('js/ajax.js') }}"></script>
@endsection