@extends('layouts/chapter')
<head>
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
<link href="https://fonts.googleapis.com/css?family=MedievalSharp|Open+Sans|Almendra|Merriweather" rel="stylesheet">
</head> 

@section('content')

<div id="riga-head-image" class="head-image">
        <img class="parchment-border" src="/images/chapters/parchment-top.png">
</div>

<div class="chapter-title">riga</div>


<p>     Na een lange tocht, komt eindelijk de haven in zicht. De ervaren zeelieden beginnen het koggeschip aan te meren en uit te laden.
        Jullie zijn inmiddels zo ver van je vertrouwde Nederland af, dat er hier zelfs al sneeuw ligt.
        Gelukkig heb je de warme jas gekregen van die aardige vrouw.
        " {{ Auth::user()->name }} !” hoor je achter je. Jan gebaart je om hem te volgen. Je bent opgelucht dat je de zware koopwaar niet hoeft uit te laden. 
        "Riga is al sinds 1282 lid van het Hanzeverbond. Kijk eens naar die prachtige gildehuizen.” Jan wijst naar de kade. 
        Je kijk rond, maar eigenlijk lijken alle huizen hetzelfde, ze zijn er allemaal super ouderwets uit. 
        Je knikt maar gewoon en doet alsof je weet waar hij het over heeft. 
       </p>

       <div class="container">
            <img src="/images/chapters/snowriga.jpg">
            <i>Het Zwarthoofdenhuis in Riga</i>
       </div>

<p>
        “Je zou me nog over die gildes vertellen” herinner je hem. “Oh ja!” zegt Jan. Jullie lopen ondertussen het centrum van Riga in. 
        “Een gilde is eigenlijk een soort vereniging van mensen die hetzelfde beroep uitoefenen. 
        Het gilde stelt regels op voor hun leden en zorgen voor de uitwisseling van kennis en ervaring. 
        Zo heb je het timmermansgilde, het bakkersgilde en dus ook het koopmannengilde. 
        Het gilde zorgt ervoor dat alleen hun leden hun beroep mogen uitoefenen, om bakker in een stad te mogen zijn moest je je dus aansluiten bij het bakkersgilde. 
        Ook stelt het gilde ook regels op voor haar leden en controleert deze. Bijvoorbeeld de prijs- en kwaliteitsafspraken. 
        Zo zorgt het bakkersgilde er bijvoorbeeld voor dat al haar leden hun brood voor dezelfde prijs verkopen zodat er geen concurrentie ontstaat
        en de klanten liever naar bakker A dan naar bakker B gaan. Tot slot zorgt het gilde voor saamhorigheid en behartigt het de belangen van hun leden. 
        De gilden hebben grote economische en politieke macht en kunnen dus echt dingen voor elkaar krijgen.”

</p>

<p>Optioneel: protagonist geeft brief af bij Lijfmansorde.</p>

<p>"Je bent een goeie scheepsmaat, {{ Auth::user()->name }}" zegt Jan, en hij slaat een arm om je heen. 
    Door deze gekke reis ben je blij dat er iemand bij je is die op je let. "Dankjewel Jan, zonder jou had ik niet geweten wat ik had moeten doen!" vertel je hem.
    "Weet je nog wat je allemaal geleerd hebt?" vraagt hij.</p>

<div class="quiz-background">
        <div class="quiz-container">
            <div id="quiz"></div>
        </div>
        <div id="previous"><button class="quizbutton" >Vorige vraag</button></div>
        <div id="next"><button class="quizbutton" >Volgende vraag</button></div>
        <div id="submit"><button class="quizbutton" >Klaar</button></div>
        <div id="results"></div>
        </div>



<br>
@if(Auth::user()->progression->rigaquiz == true)
<div id="complete-rigaquiz" class="game-completed"><div id="text-padding">Ik heb dit spel al eens gespeeld, ik wil door met het verhaal!</div></div>
@endif

<div style="display:none" id="progressdiv">
    <button type="button" id="button-e" class="button" onclick="loadDoc('GET', '/storeepilogue', nextChapter, '/chapters/epilogue')">Ga naar epiloog</button>
    </div>
@endsection

@section('scripts')
@if (Auth::user()->progression->lubeckchoice == 1)
<script src="{{ asset('js/quizvisby.js') }}"></script>
@else 
<script src="{{ asset('js/quizdanzig.js') }}"></script>
@endif

<script src="{{ asset('js/quizprogress.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>
@endsection