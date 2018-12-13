@extends('layouts/chapter')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/hanoi.css') }}">
<link href="{{ asset('css/memory.css') }}" rel="stylesheet">
@endsection

@section('content')
<p><h2>Gdansk</h2></p>

<p>Bla bla bla</p>

<p>"We zijn er eindelijk: De markt van Lübeck! Hier kunnen we alles vinden wat we maar willen, van Zweedse haring en koper tot hout en hars uit Riga, vachten uit Visby en honing
    uit het achterland van Polen. Alle handelaren uit de verre omstreken komen hier samen" vertelde Jan de scheepsmaat.
    "Laten we kijken hoeveel we hier kunnen krijgen voor onze spullen, misschien kunnen we ons ruim nog wat beter vullen als we slim handelen!"
</p>
<p>
    Samen lopen jullie naar een goed gevulde, grote kraam met een grijnzende dikke man erachter.
    "Welkom vrienden welkom! Kijk gerust naar mijn waren, als ik het niet heb is het nergens in Lübeck te vinden!" bulderde de man.
    Jan en ik kijken onze ogen uit, de kraam is volgeladen met allerlei spullen:
    Koper en vis uit Zweden, stof uit Nederland en België, vachten uit Visby, hout en hars uit Riga, graan en honing uit Rusland en Polen en zelfs grote brokken zout genaamd 'potas'.
</p>
<p>
    Ik strek mijn hand uit om een mooi groot stuk koper beter te bekijken en stoot per ongeluk tegen de kraam! Hij wankelt twee keer en stort in onder het gewicht van alle spullen!
    "Wat doe je nou?!" roept de marskramer vol ongeloof. "Kijk nou, alles ligt door elkaar!"
    Jan en ik kijken elkaar aan vol schrik, wat een ellende.
    "Het spijt me ontzettend meneer! We ruimen het gelijk op!"</p>
    <p>Alle koopwaar van de marskramer ligt door elkaar! Zoek de juiste spullen hieronder bij elkaar:</p>

<p> De marskramer haalt opgelucht adem, zijn koopwaar ligt er weer goed bij. 
    "Laten we meteen onze koopwaar voor Riga inslaan." oppert Jan. </p>


<p>Uiteindelijk mag de protagonist meehelpen met kiezen wat voor koopwaar ze inslaan om in Riga te verkopen.</p>

<div id="game"></div>

<!-- onderstaande knop verwijderen voordat product live gaat, enkel voor testdoeleinden --> 
@if(Auth::user()->progression->danzigmemory == true)
<button id="complete-test">Testknop spelvoltooiing</button>
@endif

<p>Protagonist moet de kraan met hamsterwielen gebruiken om zware materialen van het schip te laden.</p>

<div id="hanoi-parent">

    <table id='hanoi-table' border="0" cellspacing=0 cellpadding=0>
        
        <tr>
            <td colspan=5 id="hanoi-instructions">
                <form name='disp'>
                    <textarea id="hanoi-textarea" name='message' wrap=virtual rows=2 cols=40></textarea>
                </form>
            </td>
        </tr>
        <script src="/js/hanoi.js"></script>
</div>
@if(Auth::user()->progression->danzighanoi == true)
<button id="complete-hanoi">Testknop spelvoltooiing</button>
@endif
<div style="display:none" id="progressdiv">
<p>Daarna moeten er bouwmaterialen naar de kerk gebracht worden. Daar leert de protagonist over de bouw vd kerk en architecten.</p>

<p>Vanaf de warenhuizen moet er graan/potas/teer ingeladen worden. Hier leert de protagonist over het effect van oorlogen op handelsroutes.</p>

<p>Optioneel: protagonist krijgt een brief mee van de Duitse Orde voor de Lijfmansorde in Riga.</p>

<p><a href="/chapters/2/setsail">Vaar naar Riga</a></p>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/hanoiprogress.js') }}"></script>
<script src="{{ asset('js/memory.js') }}"></script>
@endsection