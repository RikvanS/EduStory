<link href="{{ asset('css/map.css') }}" rel="stylesheet">
<div class="sidebar">
            <img id="book-btn" class="nav-icon" src="/images/chapters/book.png">
            <img id="map-btn" class="nav-icon" src="/images/chapters/map.svg">
    </div>
<div id="logModal" class="modal">
    <div class="modal-content">
        <div class="functionality-buttons">
                @if (Auth::user()->progression->prologuenameage == true)
                <h1>Logboek van {{  Auth::user()->name }}</h1>      
                @else
                <h1 id="log-title">Logboek</h1>
                @endif
        <a href="/" class="no-underline"><h1>Terug naar start</h1></a>
        <a class="no-underline" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         <h1>Logout</h1>
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form> 
        <span class="close">&times;</span>
        </div>


        <div>   
    
    
{{-- Standaard --}}
            <a href="/chapters/prologue" class="log-redirect"> <p class="space-top"><h2>--Het avontuur begint--</h2></p></a>
            <p>Het begon allemaal op een doodgewone middag in Groningen. Ik viel in de gracht, maar toen ik eruit klom was alles anders!</p>


{{-- Name-age --}}
            @if (Auth::user()->progression->prologuenameage == true)
            <p>Ik weet niet hoe, maar ik ben beland in het jaar 1393. Een man denkt dat ik de nieuwe scheepsmaat op zijn schip ben, en ik word meegenomen op reis.</p>
            @endif

{{-- Setsail 1 --}}

            @if (Auth::user()->progression->setsail1 == true)
            <p>Het handelsschip zal via Lubeck en Visby naar Riga reizen. Dit zijn allemaal steden die bij het Hanzeverbond horen: een handelssamenwerking tussen Europese steden. In Lubeck is dit allemaal begonnen, zij heet 'de Koningin van de Hanze'.</p>
            @endif 

{{-- Gearriveerd in Lubeck --}}

            @if (Auth::user()->progression->lubeck == true)
            <a href="/chapters/1" class="log-redirect"><p class="space-top"><h2>--Lubeck--</h2></p></a>
            <p>In Lubeck krijg ik de opdracht een schilderij uit Nederland af te leveren bij een kunsthandelaar.</p>
            @endif 

{{-- Schilderij afgeleverd en plague doctor bezocht --}}

            @if (Auth::user()->progression->lubeckstory == true)
            <p>Op weg naar de handelaar komt ik in een soort ziekenhuis terecht. De dokter vertelt me dat handelssteden zoals Lubeck zwaar getroffen zijn door de Zwarte Dood, omdat er in havens zoveel mensen langs reizen en er veel ratten zijn die de ziekte verspreiden.</p>
            <p>De kunsthandelaar vertelt me dat Nederlandse schilderijen ontzettend populair zijn in Lubek. De rijke mensen kopen graag schilderijen uit Nederland om te laten zien hoe rijk ze zijn.</p>
            @endif 

{{-- Setsail 2a --}}
            @if (Auth::user()->progression->setsail2 == true && Auth::user()->progression->lubeckchoice == 1)
            <p>We krijgen te horen dat er piraten in Visby zijn! We besluiten om toch naar Visby te reizen.</p>
            <p>HIER KOMT INFO OVER WAT {{Auth::user()->name}} OP WEG NAAR VISBY TIJDENS DE SETSAIL LEERT</p>
            @endif 

{{-- Visby gearriveerd --}}
            @if (Auth::user()->progression->visby == true && Auth::user()->progression->lubeckchoice == 1)
            <a href="/chapters/2a" class="log-redirect"><p class="space-top"><h2>--Visby--</h2></p></a>
            <p>Bij aankomst in Visby komen we in een gevecht met de piraten terecht.</p>
            @endif

{{-- Visby na zeeslag --}}
            @if (Auth::user()->progression->visbybattleship == true && Auth::user()->progression->lubeckchoice == 1)
            <p>We hebben het gevecht overleefd, maar ons schip is zwaar beschadigd. We moeten het repareren.</p>
            @endif

{{-- Visby na puzzel --}}
            @if (Auth::user()->progression->visbyboatrepair == true && Auth::user()->progression->lubeckchoice == 1)
            <p>Nadat we het schip hebben gerepareerd, varen we verder naar Riga.</p>
            @endif

{{-- Setsail 2b --}}
            @if (Auth::user()->progression->setsail2 == true && Auth::user()->progression->lubeckchoice == 2)
            <p>We krijgen te horen dat er piraten in Visby zijn! We besluiten om de veilige weg te reizen: we gaan naar Gdansk.</p>
            <p>HIER KOMT INFO OVER WAT {{Auth::user()->name}} OP WEG NAAR VISBY TIJDENS DE SETSAIL NAAR GDANSK LEERT</p>
            @endif 

{{-- Gearriveerd in gdansk --}}
            @if (Auth::user()->progression->danzig == true && Auth::user()->progression->lubeckchoice == 2)
            <a href="/chapters/2b" class="log-redirect"><p class="space-top"><h2>--Gdansk--</h2></p></a>
            <p>Bij aankomst in Gdansk moeten we vracht uitladen met een bijzonder kraan met hamsterwielen.</p>
            @endif

{{-- Gdansk na hanoi --}}
            @if (Auth::user()->progression->danzighanoi == true && Auth::user()->progression->lubeckchoice == 2)
            <p>Daarna brengen we bouwmaterialen naar de bouwplaats van een grote kerk. De architect is Nederlands! Blijkbaar zijn Nederlandse architecten heel populair in het buitenland in deze tijd.</p>
            @endif

{{-- Gdansk na memory --}}
            @if (Auth::user()->progression->danzigmemory == true && Auth::user()->progression->lubeckchoice == 2)
            <p>Op de markt van Gdansk moet ik helpen met het sorteren van producten van over de hele wereld: Zweedse vis en koper, Nederlandse en Belgische stoffen, schapenvachten uit Visby, hout en hars uit Riga, graan en honing uit Rusland en potas en teer uit Polen.</p>
            @endif

{{-- Setsail 3 --}}

            @if (Auth::user()->progression->setsail3 == true)
            <p>Hier komt een logboekitem over de reis naar Riga.</p>
            @endif

{{-- Riga gearriveerd --}}
            @if (Auth::user()->progression->riga == true)
           <a href="/chapters/3" class="log-redirect"><h2 class="space-top">--Riga--</h2></a>
            <p>Als we in Riga arriveren gebeurt er iets.</p>
            @endif


{{-- Riga na quiz --}}
            @if (Auth::user()->progression->rigaquiz == true)
            <p>In Riga deed ik ook een quiz.</p>
            @endif

{{-- Epiloog --}}
            @if (Auth::user()->progression->epilogue == true)
            <p>In Riga gebeurde er iets waarna ik weer wakker werd in mijn eigen bed, in de 21e eeuw. Was het nou allemaal een droom?</p>
            @endif
        </div>
    </div>
</div>

<div id="mapModal" class="modal">
        <div class="map">
            <img src="/images/chapters/iconfinder_castle_345367.svg" id="groningen-icon" class="city">
            <img src="/images/chapters/iconfinder_castle_345367.svg" id="lubeck-icon" class="city">
            <img src="/images/chapters/iconfinder_castle_345367.svg" id="gdansk-icon" class="city">
            <img src="/images/chapters/iconfinder_castle_345367.svg" id="visby-icon" class="city">
            <img src="/images/chapters/iconfinder_castle_345367.svg" id="riga-icon" class="city">
            <div class="nametag" id="gro-name">Groningen</div>
            <div class="nametag" id="lub-name">Lubeck</div>
            <div class="nametag" id="gda-name">Gdansk</div>
            <div class="nametag" id="vis-name">Visby</div>
            <div class="nametag" id="rig-name">Riga</div>
            <div id="gro-description" class="city-description">
                <h2 class="city-title">Groningen</h2>
                <p class="city-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu malesuada tortor. Nunc quis nunc in arcu volutpat consectetur. Maecenas accumsan ultricies efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida justo blandit, tempus metus ac, placerat elit.</p>
            </div>
            <div id="lub-description" class="city-description" style="display:none">
                <h2 class="city-title">Lubeck</h2>
                <p class="city-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu malesuada tortor. Nunc quis nunc in arcu volutpat consectetur. Maecenas accumsan ultricies efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida justo blandit, tempus metus ac, placerat elit.</p>
            </div>
            <div id="vis-description" class="city-description" style="display:none">
                <h2 class="city-title">Visby</h2>
                <p class="city-text"> Visby ligt op het eiland Gotland. Het stadje stamt uit het Viking tijdperk en en wordt beschermd door steile kliffen. In de 13e eeuw groeide Visby van handelspost uit tot indrukwekkende stad, omringd door een grote sterke muur.  Halverwege de 14e eeuw sloeg de plaag toe in Visby en daardoor verloor het zijn goede positie in het handelsgebied. Later zouden oorlog en piraterij hun sporen achterlaten op het eens zo vredige Visby.</p>
            </div>
            <div id="gda-description" class="city-description" style="display:none">
                <h2 class="city-title">Gdansk</h2>
                <p class="city-text">Gdansk is een bruisende handelsstad in 1393. Goederen uit het achterland worden via de Vistularivier naar Gdansk gebracht en verder verhandeld.<br /> De haven staat vol pakhuizen en een bijzondere kraantoren.</p>
            </div>
            <div id="rig-description" class="city-description" style="display:none">
                <h2 class="city-title">Riga</h2>
                <p class="city-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu malesuada tortor. Nunc quis nunc in arcu volutpat consectetur. Maecenas accumsan ultricies efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida justo blandit, tempus metus ac, placerat elit.</p>
            </div>        
        </div>
    <script src="{{ asset('js/map.js') }}"></script>
</div>        