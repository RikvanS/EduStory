@extends('layouts/chapter')

@section('content')
<div id="lubeck-head-image" class="head-image">
        <img class="parchment-border" src="/images/chapters/parchment-top.png">
</div>

<div class="chapter-title">lubeck</div>

<p>     Eindelijk varen jullie de volgende haven binnen. Door het lawaai van de zeemeeuwen, hoor je je nieuwe reismaatje Jan bijna niet. Maar Jan geeft nooit op.
        “Welkom in Lubeck, {{ Auth::user()->name }} ! Strek je benen vooral en kijk even rond, maar vergeet niet waarvoor we hier zijn gekomen. 
        We kunnen niet vertrekken voordat je bij de kunsthandelaar langs bent geweest. En er zijn hier genoeg andere gebouwen om te ontdekken” zegt hij terwijl hij op de kade stapt. “Tot straks!”. 
        Je ziet genoeg wat je aandacht trekt; een mooie kerk, en de kunsthandel waar Jan het over had. Nieuwsgierig stap je aan land. 
        
</p>

<a href="/chapters/1/lubeck"><button type="button" id="button-f" class="button">Bezorg het schilderij en kijk rond</button></a>

@if(Auth::user()->progression->lubeckstory == true)
<div class="buttons" id="progressdiv"> 
    @if(Auth::user()->progression->lubeckchoice == 0)

    <p> Vlak voor jullie willen vertrekken, komt er een scheepsjongen aangerend. Hij heeft slecht nieuws: er gaan geruchten over piraten in Visby.
        Wil je toch naar Visby? Of beter een andere route?</p>
    <a href="/chapters/1/setsail1a" onclick="loadDoc('GET', '/storesetsail2', workplease)"><button type="button" id="button-a" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice1', workplease)">Vaar naar Visby</button></a>
    <a href="/chapters/1/setsail1b" onclick="loadDoc('GET', '/storesetsail2', workplease)"><button type="button" id="button-b" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice2', workplease)">Vaar naar Gdansk</button></a>
    @endif

    @if(Auth::user()->progression->lubeckchoice == 1)
    <p>Je hebt gekozen voor Visby!</p>
    <a href="/chapters/1/setsail1a" onclick="loadDoc('GET', '/storesetsail2', workplease)"><button type="button" id="button-a" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice1', workplease)">Vaar naar Visby</button></a>
    @endif

    @if(Auth::user()->progression->lubeckchoice == 2)
    <p>Je hebt gekozen voor Gdansk!</p>
    <a href="/chapters/1/setsail1b" onclick="loadDoc('GET', '/storesetsail2', workplease)"><button type="button" id="button-b" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice2', workplease)">Vaar naar Gdansk</button></a>
    @endif
</div>    
@endif


@endsection

@section('scripts')
<script src="{{ asset('js/ajax.js') }}"></script>
<script src="{{ asset('js/lubeckstory.js') }}"></script>
<script src="{{ URL::asset('js/ajax.js') }}"></script>
@endsection