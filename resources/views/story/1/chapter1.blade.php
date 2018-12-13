@extends('layouts/chapter')

@section('content')

<p>placeholder tekst voor narrative lubeck.
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt praesentium fuga necessitatibus distinctio voluptas totam quas quaerat! Dolorum, quos quam totam aliquid ab ex laboriosam reprehenderit, nisi, quidem ut nam?
Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit unde voluptatibus, maiores iure laudantium tempore consectetur animi necessitatibus enim repellat. Ex, eveniet ad? Dolores quia quae, provident consequatur amet eum!
</p>

<a href="/chapters/1/lubeck">Bezorg het schilderij en kijk rond</a>

@if(Auth::user()->progression->lubeckstory == true)
<p> Vlak voor jullie willen vertrekken, komt er een scheepsjongen aangerend. Hij heeft slecht nieuws: er gaan geruchten over piraten in Visby.
    Wil je toch naar Visby? Of beter een andere route?</p>
 
@endif


@if(Auth::user()->progression->lubeckstory == true)
<div class="buttons" id="progressdiv"> 
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
@endif


@endsection

@section('scripts')
<script src="{{ asset('js/ajax.js') }}"></script>
<script src="{{ asset('js/lubeckstory.js') }}"></script>
@endsection