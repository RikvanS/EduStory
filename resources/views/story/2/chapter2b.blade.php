@extends('layouts/chapter')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/hanoi.css') }}">
@endsection

@section('content')
<p><h2>Gdansk</h2></p>

<p>"{{ Auth::user()->name }}! Wakker worden, snel!" Je slaat je ogen open. Jan staat over je heen gebogen. "Was je in slaap gevallen? Daar hebben we nu geen tijd voor. Kijk maar, we zijn aangekomen in Gdansk!"</p>

<p>Slaperig kijk je om je heen. Dan slaan je ogen wagenwijd open. Je lag zo diep te slapen, dat je helemaal niet doorhad dat het schip niet meer op open zee is. Jullie zijn in een haven! En wat voor een... Overal om je heen liggen grote schepen, ertussen varen allemaal kleine bootjes. Op de kade staan rijen met grote pakhuizen en zie je een wirwar van mensen door elkaar heen lopen.</p>

<p>"Kijk, zie je die toren? Met die kraan eraan? Daar gaan we uitladen. Wat een gezicht hè! Een knap staaltje vakmanschap, het is een van de modernste kraantorens in Europa!'</p>

<p>Je kijkt naar de toren die Jan aanwijst. Wat een vreemde constructie! Het zijn eigenlijk twee torens met een houten kraan ertussen, en daar beneden.. Wat zijn dat? Het lijken wel grote hamsterwielen.</p> 

<p>"Hoe dan?", vraag je. "Hoe werken die hamsterwielen daaronderaan?" Jan kijkt je versuft aan. Hij zegt: "Wat? Ham.. hamsterwielen? Wat zeg je soms toch ook rare dingen." Dat is ook zo! Hamsters komen niet uit Europa, Jan heeft geen idee waar ik het over heb.</p>

<p>Je wijst naar de hamsterwielen. "Ik bedoel die twee grote wielen daar, onderaan de torens. Waar zijn die voor?" Jans ogen beginnen te glimmen. "Die worden gebruikt om zware spullen omhoog te takelen. Kijk, de wielen zijn verbonden met kabels. Er gaan mensen in staan, en als zij gaan lopen dan wordt de vracht op dat platform daar omhoog getakeld! Maar wacht maar, je zult het zo zelf wel zien."</p>

<p>Je kijkt over de reling terwijl het schip aanmeert naast de kraantoren. Je ziet nu inderdaad dat er mensen in de hamsterwielen staan, vier per wiel. Ze beginnen langzaam te bewegen. Een platform dat aan de kabels hangt beweegt naar beneden, tot het vlak boven het dek hangt.</p>

<p>"Zo!", zegt Jan. "Tijd om aan de slag te gaan. Zie je deze stapel kisten? Die moeten opgestapeld worden op het platform. Let op, ze zijn heel zwaar! Vooral die onderop. Zorg ervoor dat je nooit een grotere kist op een kleinere kist zet. Er is nog wat vrije ruimte daar links van de stapel, daar kun je ook wat neerzetten terwijl je de kisten overstapelt naar het platform."</p>

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

<p>"Goedzo, {{ Auth::user()->name }}. Je bent sterker dan je lijkt! Kom, we kunnen de rest van het uitladen aan de rest overlaten. Wij moeten die zware kisten nu snel afleveren."</p>

<p>Je loopt achter Jan aan van het schip af, de kade op. Daar zet een gespierde man net de laatste kist die je zojuist op het platform hebt gezet, op een platte kar. "Dzięki!" zegt Jan tegen de man. "Kom op, help me deze kar duwen!"</p>

<p>Je pakt 

<p>Daarna moeten er bouwmaterialen naar de kerk gebracht worden. Daar leert de protagonist over de bouw vd kerk en architecten.</p>

<p>Vanaf de warenhuizen moet er graan/potas/teer ingeladen worden. Hier leert de protagonist over het effect van oorlogen op handelsroutes.</p>

<p>Optioneel: protagonist krijgt een brief mee van de Duitse Orde voor de Lijfmansorde in Riga.</p>

<p><a href="/chapters/2/setsail">Vaar naar Riga</a></p>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/hanoiprogress.js') }}"></script>
@endsection