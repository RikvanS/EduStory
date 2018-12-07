@extends('layouts/chapter')

@section('content')
<link href="{{ asset('css/memory.css') }}" rel="stylesheet">
<p>De protagonist moet aan het werk! Hij krijgt de opdracht om een schilderij af te leveren bij een kunsthandelaar, en daarna de kapitein mee te helpen op de markt.</p>

<p>Hier komt een plaatje van twee huizen, een kunsthandel en een mysterieus gebouw.</p>
<p>En dit wordt een hidden div naast de vorige, waar het pad naar de markt zichtbaar wordt nadat de andere twee hoofdstukken zijn afgerond.</p>

<p>In de kunsthandel moet de protagonist een schilderij afleveren, en de handelaar vertelt hem over Lubek en kunstenaars.</p>
<p>In het mysterieuze gebouw ziet de protagonist allemaal gereedschappen die vroeger gebruikt werden bij het bestrijden van de plaag. Een oude man vertelt hem erover.</p>

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
<div id="game"></div>
<p> De marskramer haalt opgelucht adem, zijn koopwaar ligt er weer goed bij. 
    "Laten we meteen onze koopwaar voor Riga inslaan." oppert Jan. </p>

<p> Vlak voor jullie willen vertrekken, komt er een scheepsjongen aangerent. Hij heeft slecht nieuws: er gaan geruchten over piraten in Visby.
    Wil je toch naar Visby? Of beter een andere route?</p>

<div class="buttons" style="display:none" id="progressdiv"> 
    <a href="/chapters/1/setsail"><button type="button" id="button-a" class="button">Vaar naar Visby</button></a>
    <a href="/chapters/1/setsail"><button type="button" id="button-b" class="button">Vaar naar Gdansk</button></a>
</div>    



@endsection

@section('scripts')
<script src="{{ asset('js/memory.js') }}"></script>
@endsection