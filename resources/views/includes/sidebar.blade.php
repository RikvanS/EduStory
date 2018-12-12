<link href="{{ asset('css/map.css') }}" rel="stylesheet">
<div class="sidebar">
            <img id="book-btn" class="nav-icon" src="/images/chapters/book.png">
            <img id="map-btn" class="nav-icon" src="/images/chapters/map.svg">
    </div>
<div id="logModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1 id="log-title">Logboek</h1>
        <p>Modal text</p>
        <!-- Default Dynamic Section -->
<div id="default-content" class="dynamic-content">
    Standaard info logboek, altijd zichtbaar
  </div>
  <!-- Dynamic Section 1 -->
  @if(Auth::user()->progression->lubeck == true)
  <div id="lubeck" class="dynamic-content">
    Lübeck section
  </div>
  @endif
  <!-- Dynamic Section 2 -->
  @if(Auth::user()->progression->visby == true)
  <div id="visby" class="dynamic-content">
    Visby section
  </div>
  @endif
  <!-- Dynamic Section 3 -->
  @if(Auth::user()->progression->danzig == true)
  <div id="danzig" class="dynamic-content">
    Danzig section
  </div>
  @endif
  @if(Auth::user()->progression->riga == true)
  <div id="riga" class="dynamic-content">
    Riga section
  </div>
  @endif
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
            <div id="gro-description" style="display:none" class="city-description">
                <h2 class="city-title">Groningen</h2>
                <p class="city-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu malesuada tortor. Nunc quis nunc in arcu volutpat consectetur. Maecenas accumsan ultricies efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida justo blandit, tempus metus ac, placerat elit.</p>
            </div>
            <div id="lub-description" class="city-description">
                <h2 class="city-title">Lubeck</h2>
                <p class="city-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu malesuada tortor. Nunc quis nunc in arcu volutpat consectetur. Maecenas accumsan ultricies efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida justo blandit, tempus metus ac, placerat elit.</p>
            </div>
            <div id="vis-description" class="city-description">
                <h2 class="city-title">Visby</h2>
                <p class="city-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu malesuada tortor. Nunc quis nunc in arcu volutpat consectetur. Maecenas accumsan ultricies efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida justo blandit, tempus metus ac, placerat elit.</p>
            </div>
            <div id="gda-description" class="city-description">
                <h2 class="city-title">Gdansk</h2>
                <p class="city-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu malesuada tortor. Nunc quis nunc in arcu volutpat consectetur. Maecenas accumsan ultricies efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida justo blandit, tempus metus ac, placerat elit.</p>
            </div>
            <div id="rig-description" class="city-description">
                <h2 class="city-title">Riga</h2>
                <p class="city-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu malesuada tortor. Nunc quis nunc in arcu volutpat consectetur. Maecenas accumsan ultricies efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida justo blandit, tempus metus ac, placerat elit.</p>
            </div>        
        </div>
    <script src="{{ asset('js/map.js') }}"></script>
</div>        