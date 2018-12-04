@extends('layouts/chapter')

@section('content')
<p>De protagonist moet aan het werk! Hij krijgt de opdracht om een schilderij af te leveren bij een kunsthandelaar, en daarna de kapitein mee te helpen op de markt.</p>

<p>Hier komt een plaatje van twee huizen, een kunsthandel en een mysterieus gebouw.</p>
<p>En dit wordt een hidden div naast de vorige, waar het pad naar de markt zichtbaar wordt nadat de andere twee hoofdstukken zijn afgerond.</p>

<p>In de kunsthandel moet de protagonist een schilderij afleveren, en de handelaar vertelt hem over Lubek en kunstenaars.</p>
<p>In het mysterieuze gebouw ziet de protagonist allemaal gereedschappen die vroeger gebruikt werden bij het bestrijden van de plaag. Een oude man vertelt hem erover.</p>

<p>Op de markt leert de protagonist over verschillende handelswaren en waar ze vandaan komen. Hij doet een memory spel.</p>
<div id="game"></div>
<p>Uiteindelijk mag de protagonist meehelpen met kiezen wat voor koopwaar ze inslaan om in Riga te verkopen.</p>

<p>Vlak voor ze willen vertrekken, heeft iemand slecht nieuws: er gaan geruchten over piraten in Visby. Willen ze toch naar Visby? Of beter een andere route?</p>

<div class="buttons" style="display:none" id="progressdiv"> 
    <a href="/chapters/1/setsail"><button type="button" id="button-a" class="button">Vaar naar Visby</button></a>
    <a href="/chapters/1/setsail"><button type="button" id="button-b" class="button">Vaar naar Gdansk</button></a>
</div>    

<link href="{{ asset('css/memory.css') }}" rel="stylesheet">
<script src="{{ asset('js/memory.js') }}"></script>
@endsection

