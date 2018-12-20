@extends('layouts/chapter')

@section('content')
<div id="lubeck-head-image" class="head-image">
        <img class="parchment-border" src="/images/chapters/parchment-top.png">
</div>

<div class="chapter-title">Lübeck</div>

<p>De lange reis van Groningen naar Lübeck verloopt voorspoedig. Onderweg neemt Jan je onder zijn hoede. Hij stelt je voor aan de rest van de bemanning en hij leert je veel over het leven van varende handelslieden in 1393. Hij kan zulke mooie verhalen vertellen over het leven op zee! Ook al zou je soms willen dat hij even ophield met vertellen zodat je wat tijd voor jezelf kan nemen.</p>

<p>     Na wat voelt als weken reizen varen jullie eindelijk de haven van Lübeck binnen. Door het lawaai van de zeemeeuwen hoor je je nieuwe reismaatje Jan bijna niet. Maar Jan geeft nooit op.
        “Welkom in Lübeck, {{ Auth::user()->name }}! Ik heb gelijk een opdracht voor je. Dit schilderij moet worden afgelevered bij de kunsthandelaar in de haven. We kunnen pas verder reizen als je dat hebt gedaan! Maar neem ook vooral de tijd om even je benen te strekken en rond te kijken, er zijn hier genoeg interessante plekken om te verkennen." zegt hij terwijl hij op de kade stapt. “Tot straks!”</p>
        <p>Je ziet genoeg wat je aandacht trekt; een mooie kerk, en de kunsthandel waar Jan het over had. Nieuwsgierig stap je aan land. 
        
</p>
<div id="artgallery-button">
    <a href="/chapters/1/lubeck"><button type="button" id="button-f" class="button">Bezorg het schilderij en kijk rond</button></a>
</div>

@if(Auth::user()->progression->lubeckstory == true)
<p>"Is het gelukt, {{ Auth::user()->name }}?" vraagt Jan als je weer aan boord van het schip stapt. "Jazeker!" zeg je, en je vertelt Jan wat je allemaal hebt gezien in Lübeck. Jan kijkt je vrolijk aan. "Jij bent wel een 

    @if(Auth::user()->gender == "jongen")
    nieuwsgierige jongen,
    @else
    nieuwsgierig meisje,
    @endif
    of niet? Uitstekend gedaan!" Jan roept ondertussen de kapitein erbij. "Deze {{ Auth::user()->age }}-jarige  @if(Auth::user()->gender == "jongen")
    jongen
    @else
    meid
    @endif 
    heeft voor het eerst iets verkocht!" Jan lijkt helemaal trots te zijn. Je raakt een beetje verlegen.</p>
    <p>De grote kapitein kijkt je aan, en tussen zijn grote baard zie je een glimlach verschijnen. "Gefeliceerd" zegt hij, terwijl hij je hand pakt. Ondertussen schudt hij je hand zo enthousiast, dat het voelt alsof je hand geplet wordt.
    Jan ziet het en geeft je met een schaterlach nog een flinke schouderklop toe. "Bij handelen hoort een stevige handdruk!" legt hij uit. 
    De kapitein heeft nog wat zeggen, maar dan komt er een jongen over de kade aanrennen. Hij schreeuwt iets naar jullie. Je verstaat hem niet, maar de kapitein gaat van boord en begint een gesprek met de jongen. </p>
    <p>"Dat ziet er niet goed uit," zegt Jan, "moet je eens kijken hoe de kapitein kijkt." Je kijkt goed. De kapitein zijn gezicht staat op onweer! Wat zou er aan de hand zijn?</p>
    <p>Even later komt de kapitein weer aan boord en loopt naar Jan toe. "Slecht nieuws?" vraagt Jan. De mond van de kapitein vertrekt. "Helaas wel ja. Er gaan geruchten dat Visby is aangevallen door piraten. Niemand weet precies wat er gebeurd is, en of de kust nu weer veilig is of niet. Wat doen we nu? Gaan we gewoon naar Visby? Of zullen we de route aanpassen, en via Gdansk naar Riga varen?"</p>

<div class="buttons" id="lubeckprogressdiv"> 
    @if(Auth::user()->progression->lubeckchoice == 0)
        <div class="visby-danzig">
            <div onclick="loadDoc('GET', '/storesetsail2', nextChapter, '/chapters/1/setsail1a')"><button type="button" id="button-a" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice1', workplease)">Vaar naar Visby</button></div>
            <div onclick="loadDoc('GET', '/storesetsail2', nextChapter, '/chapters/1/setsail1b')"><button type="button" id="button-b" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice2', workplease)">Vaar naar Gdansk</button></div>       
        </div>    
    @endif
    </div>
    @if(Auth::user()->progression->lubeckchoice == 1)
    <p>Na lang overleg besluiten jullie om toch naar Visby te gaan. De piraten zullen inmiddels vast weer weg zijn.</p>
    <div class="travel-center">
    <div onclick="loadDoc('GET', '/storesetsail2', nextChapter, '/chapters/1/setsail1a')"><button type="button" id="button-a" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice1', workplease)">Vaar naar Visby</button></div>
    </div>
    @endif

    @if(Auth::user()->progression->lubeckchoice == 2)
    <p>Na lang overleg besluiten jullie om het zekere voor het onzekere te nemen, en via Gdansk naar Riga te reizen.</p>
    <div class="travel-center">
    <div onclick="loadDoc('GET', '/storesetsail2', nextChapter, '/chapters/1/setsail1b')"><button type="button" id="button-b" class="button" onclick="loadDoc('GET', '/chapters/lubeck/lubeck-choice2', workplease)">Vaar naar Gdansk</button></div>
    </div>
    @endif
</div>    
@endif

<div id="chapter-bottom-div">
    </div>
@endsection

@section('scripts')
<script src="{{ URL::asset('js/ajax.js') }}"></script>
@endsection