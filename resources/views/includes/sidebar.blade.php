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
            <p>Het handelsschip zal via Lübeck en Visby naar Riga reizen. Dit zijn allemaal steden die bij het Hanzeverbond horen: een handelssamenwerking tussen Europese steden. In Lübeck is dit allemaal begonnen, zij heet 'de Koningin van de Hanze'.</p>
            @endif 

{{-- Gearriveerd in Lubeck --}}

            @if (Auth::user()->progression->lubeck == true)
            <a href="/chapters/1" class="log-redirect"><p class="space-top"><h2>--Lübeck--</h2></p></a>
            <p>In Lubeck krijg ik van Jan de opdracht een schilderij uit Nederland af te leveren bij een kunsthandelaar. Gelukkig mag ik ook nog even rondkijken, er is zoveel te zien!</p>
            @endif 

{{-- Schilderij afgeleverd en plague doctor bezocht --}}

            @if (Auth::user()->progression->lubeckstory == true)
            <p>Op weg naar de handelaar komt ik in een soort ziekenhuis terecht. De dokter vertelt me dat handelssteden zoals Lubeck zwaar getroffen zijn door de Zwarte Dood, omdat er in havens zoveel mensen langs reizen en er veel ratten zijn die de ziekte verspreiden.</p>
            <p>De kunsthandelaar vertelt me dat Nederlandse schilderijen ontzettend populair zijn in Lübeck. De rijke mensen kopen graag schilderijen uit Nederland om te laten zien hoe rijk ze zijn.</p>
            @endif 

{{-- Setsail 2a --}}
            @if (Auth::user()->progression->setsail2 == true && Auth::user()->progression->lubeckchoice == 1)
            <p>We krijgen te horen dat er piraten in Visby zijn! We besluiten om toch naar Visby te reizen.
            Visby is de grootste stad op het eiland Gotland en staat bekend om haar lange stadsmuren die het drukke handelscentrum beschermen.</p>
            @endif 

{{-- Visby gearriveerd --}}
            @if (Auth::user()->progression->visby == true && Auth::user()->progression->lubeckchoice == 1)
            <a href="/chapters/2a" class="log-redirect"><p class="space-top"><h2>--Visby--</h2></p></a>
            <p>Bij aankomst in Visby belandden we in een gevecht met de beruchte piraat Stortebeker! Dit wordt spannend, maar als iedereen goed oplet en zijn werk doet redden we het wel!</p>
            @endif

{{-- Visby na zeeslag --}}
            @if (Auth::user()->progression->visbybattleship == true && Auth::user()->progression->lubeckchoice == 1)
            <p>We hebben het gevecht overleefd, maar ons schip is zwaar beschadigd. We moeten het repareren. Gelukkig kunnen we in de haven van Visby goed terecht om alles weer op z'n plek te zetten!</p>
            @endif

{{-- Visby na puzzel --}}
            @if (Auth::user()->progression->visbyboatrepair == true && Auth::user()->progression->lubeckchoice == 1)
            <p>Het was wat puzzelen maar alles is gerepareerd en staat weer op zijn plek! Ons koggeschip ziet er zo goed als nieuw uit. We kunnen doorreizen naar Riga.</p>
            @endif

{{-- Setsail 2b --}}
            @if (Auth::user()->progression->setsail2 == true && Auth::user()->progression->lubeckchoice == 2)
            <p>We krijgen te horen dat er piraten in Visby zijn! We besluiten om de veilige weg te reizen: we gaan naar Gdansk.</p>
            <p>Gdansk (of Danzig in het Nederlands) wordt bestuurd door Duits sprekenden, maar je hoort er heel veel talen: Scandinavische talen, Engels, Duits, Nederlands, noem het maar op! 
                Misschien leer ik wel een woordje in een andere taal!
            </p>
            @endif 

{{-- Gearriveerd in gdansk --}}
            @if (Auth::user()->progression->danzig == true && Auth::user()->progression->lubeckchoice == 2)
            <a href="/chapters/2b" class="log-redirect"><p class="space-top"><h2>--Gdansk--</h2></p></a>
            <p>Bij aankomst in Gdansk moeten we vracht uitladen met een bijzondere kraan met hamsterwielen.
                De wielen worden aangedreven door mensen die erin lopen, wat slim gedaan! 
            </p>
            @endif

{{-- Gdansk na hanoi --}}
            @if (Auth::user()->progression->danzighanoi == true && Auth::user()->progression->lubeckchoice == 2)
            <p> Ik heb geholpen met kisten opstapelen bij het uitladen. We hadden niet veel ruimte dus moest er veel heen en weer getild worden, maar uiteindelijk is alles uitgeladen met die bijzondere kraan!
                Daarna brengen we bouwmaterialen naar de bouwplaats van een grote kerk. De architect is Nederlands! Blijkbaar zijn Nederlandse architecten heel populair in het buitenland in deze tijd.</p>
            @endif

{{-- Gdansk na memory --}}
            @if (Auth::user()->progression->danzigmemory == true && Auth::user()->progression->lubeckchoice == 2)
            <p>Nadat we bij de architect de bouwmaterialen hadden afgeleverd nam Jan me mee naar de grote markt.
                Ik keek mijn ogen uit, de hele markt stond vol met spullen uit heel Europa! Koper, vis, graan, huiden, hout en hars voor schepen, stof, honing en zelfs grote rode brokken zout die ze 'potas' noemen.
                Jan en ik gingen bij een kraampje de handelswaar beter bekijken, maar toen ik een stuk koper wilde pakken om te bekijken stortte de hele kraam in!
                Om het goed te maken met de marskramer heb ik alles helpen sorteren.
            </p>
            @endif

{{-- Setsail 3 --}}

            @if (Auth::user()->progression->setsail3 == true)
            <p>Ik vond Riga maar een vreemde naam, totdat Jan me uitlegde dat het een oud woord is voor pakhuis! Blijkbaar handelden de oude inwoners hier al zoveel dat de hele stad vernoemd is naar de pakhuizen die je overal ziet!
                Hij vertelde me ook over een heel mooi gildehuis, het Zwarthoofdenhuis. Ik ben benieuwd!
            </p>
            @endif

{{-- Riga gearriveerd --}}
            @if (Auth::user()->progression->riga == true)
           <a href="/chapters/3" class="log-redirect"><h2 class="space-top">--Riga--</h2></a>
            <p>Jan vertelde me dat Riga al sinds 1282 lid is van het Hanzeverbond. Al meer dan 100 jaar!</p>
            <p>Hij legde me ook beter uit wat gildes zijn en hoe ze werken. Het klinkt wat ingewikkeld maar ook erg slim! Zulke samenwerking doen we in onze tijd ook nog steeds!</p>
            @endif


{{-- Riga na quiz --}}
            @if (Auth::user()->progression->rigaquiz == true)
            <p>Jan was benieuwd of ik goed had opgelet en geluisterd tijdens de reis. Hij heeft me zelfs overhoord! Ik was best trots dat ik al zijn vragen goed heb beantwoord!</p>
            @endif

{{-- Epiloog --}}
            @if (Auth::user()->progression->epilogue == true)
            <p>Op weg van Riga terug naar Groningen ging ik benedendeks om wat te rusten en te schuilen voor de kou. Ik viel al snel in slaap en droomde over alles wat ik had meegemaakt.
                Ik dacht dat Jan me wakker maakte, maar het was Jan helemaal niet! Ik lag opeens op een woonboot in het Groningen van nu, waar een man me vertelde dat ik in het water was gevallen!
                Was het dan allemaal een droom?
            </p>
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
                <p class="city-text">Groningen lag in de middeleeuwen op een strategische plek:  hoog genoeg op het noordelijkste puntje van de Hondsrug  zodat het water er niet bij kon als er stormvloeden waren. Anderzijds goed bereikbaar vanaf het water via onder andere het Reitdiep. Hierdoor groeide Groningen in de middeleeuwen uit tot een welvarend handelscentrum. Pakhuizen zoals die aan het Hoge der A lagen vol graan, wol en huiden. Deze werden verhandeld in Engeland, maar ook in Duitsland, Denemarken en het Baltisch gebied.  </p>
            </div>
            <div id="lub-description" class="city-description" style="display:none">
                <h2 class="city-title">Lubeck</h2>
                <p class="city-text">Rond 1200 werd de haven van Lübeck het hoofdvertrekpunt van kolonisten op weg naar de Baltische gebieden die veroverd waren door de Lijfse en later Duitse Orde.
                        In de 14e eeuw werd Lübeck de onbetwiste koningin van alle Hanze steden, aangezien het veruit het machtigste, rijkste en grootste lid van het verbond was.
                        Lübeck voerde, samen met de Hanze liga, veel oorlog met Denemarken en Noorwegen om het handelsprivilege te beschermen.</p>
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
                <p class="city-text"> De stad Riga is rond het eind van de 12e eeuw gesticht, echter kwamen de vikingen eeuwen hiervoor al langs het gebied wat ooit Riga zou worden op weg om handel te drijven in Constantinopel. In 1282 werd Riga lid van de Hanze.
                        De naam Riga komt van het oude Lijfse woord voor pakhuis, wat aangeeft dat er in dit gebied al rijk werd gehandeld lang voordat het lid werd van de Hanze liga.
                        Riga stond in deze tijd eveneens bekend om hun innovatieve werk op het gebied van munten slaan. De Aartsbisschoppen van Riga herontdekten technieken die sinds de oude Romeinen niet meer werden gebruikt!</p>
            </div>        
        </div>
    <script src="{{ asset('js/map.js') }}"></script>
</div>        