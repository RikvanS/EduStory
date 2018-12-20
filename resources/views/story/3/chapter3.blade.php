@extends('layouts/chapter')

@section('head')
<link rel="stylesheet" href="{{ asset('css/chapter3.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
<link href="https://fonts.googleapis.com/css?family=MedievalSharp|Open+Sans|Almendra|Merriweather" rel="stylesheet">
@endsection

@section('content')

<div id="riga-head-image" class="head-image">
        <img class="parchment-border" src="/images/chapters/parchment-top.png">
</div>

<div class="chapter-title">riga</div>




<p>     Na een lange tocht komt eindelijk de haven in zicht. De ervaren zeelieden beginnen het koggeschip aan te meren en uit te laden.
        Jullie zijn inmiddels zo ver van je vertrouwde Nederland af, dat er hier zelfs al sneeuw ligt.
        Gelukkig heb je die warme jas gekregen van de aardige vrouw in Groningen.
        "{{ Auth::user()->name }} !" hoor je achter je. Jan gebaart je om hem te volgen. Je bent opgelucht dat je de zware koopwaar niet hoeft uit te laden. 
        "Riga is al sinds 1282 lid van het Hanzeverbond. Kijk eens naar die prachtige gildehuizen." Jan wijst naar de kade. 
        Je kijkt rond, maar eigenlijk lijken alle huizen hetzelfde, ze zien er allemaal superouderwets uit. 
        Je knikt maar gewoon en doet alsof je weet waar hij het over heeft. 
       </p>
       
        
        
       <div class="container">

           <div class="fadein" id="zwarthoofdenhuis">
            <img src="/images/chapters/snowriga_rsz.jpg">
            <br>
            <i>Het Zwarthoofdenhuis in Riga</i>
        </div>
       </div>

       <div class="view-poll">
            <div class="caption">
                    <p>
                            "Je zou me nog over die gildes vertellen" herinner je hem. "Oh ja!" zegt Jan. Jullie lopen ondertussen het centrum van Riga in. 
                            "Een gilde is eigenlijk een soort vereniging van mensen die hetzelfde beroep uitoefenen. 
                            Het gilde stelt regels op voor haar leden en zorgt voor uitwisseling van kennis en ervaring. 
                            Zo heb je het timmermansgilde, het bakkersgilde en dus ook het koopmansgilde. 
                            Het gilde zorgt ervoor dat alleen haar leden hun beroep mogen uitoefenen. Om bakker in een stad te mogen zijn moet je je bijvoorbeeld aansluiten bij het bakkersgilde. 
                            Ook stelt het gilde regels op voor haar leden en controleert deze. Bijvoorbeeld de prijs- en kwaliteitsafspraken. 
                            Zo zorgt het bakkersgilde er bijvoorbeeld voor dat al haar leden hun brood voor dezelfde prijs verkopen. Hierdoor ontstaat er geen concurrentie
                            waardoor de klanten liever naar bakker A dan naar bakker B gaan. Tot slot zorgt het gilde voor saamhorigheid en behartigt het de belangen van haar leden. 
                            De gilden hebben grote economische en politieke macht en kunnen dus echt dingen voor elkaar krijgen."
                    
                    </p>
            </div>
            <div class="bread-flex">
             <img class="center-bread" src="/images/chapters/bread.jpg" alt=""/>
            </div>

          </div>

                        <p>     Samen met Jan loop je naar de koopman waar jullie de schapenhuiden af moeten leveren. Jan begint tegen de handelaar te praten in een taal die je niet helemaal verstaat. 
                                Wat handig dat Jan zoveel talen spreekt. Hij stoot je aan, en gebaart je om de hand te schudden van de koopman, wat je deze keer met al je kracht doet. 
                                Tevreden met jullie opbrengst lopen jullie weer richting de boot.  <br>
                                "Je bent een goeie scheepsmaat, {{ Auth::user()->name }}" zegt Jan, en hij slaat een arm om je heen. 
                                Je bent blij dat er iemand is die op je let tijdens deze gekke reis. "Dankjewel Jan, zonder jou had ik niet geweten wat ik had moeten doen!" vertel je hem.
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
        <p>"Je wist alles nog! Wat heb jij goed opgelet tijdens de reis {{ Auth::user()->name }}!" zegt Jan. Je ziet de bewondering in zijn ogen en je voelt je best trots! Je hebt eigenlijk heel veel geleerd tijdens deze reis.</p>
        <p>"Ga je weer mee terug naar het schip? Vanavond zetten we weer koers terug naar Groningen. Tijd om naar huis te gaan!" Naar huis! Wat is het lang geleden dat jullie in Groningen waren... Je volgt Jan terug naar het schip.</p>
    <div class="travel-center">
    <button type="button" id="button-e" class="button" onclick="loadDoc('GET', '/storeepilogue', nextChapter, '/chapters/epilogue')">Ga naar epiloog</button>
    </div>
</div>
@endsection

@section('scripts')
@if (Auth::user()->progression->lubeckchoice == 1)
<script src="{{ asset('js/quizvisby.js') }}"></script>
@else 
<script src="{{ asset('js/quizdanzig.js') }}"></script>
@endif

<script src="{{ asset('js/quizprogress.js') }}"></script>
<script src="{{ asset('js/rigaeffect.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>
@endsection