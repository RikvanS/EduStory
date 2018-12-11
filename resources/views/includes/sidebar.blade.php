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
    <div class="modal-content">
        <span class="close">&times;</span>
        <h1 id="map-title"></h1>
        <div>Map</div>
        <p>Plaatsbeschrijving</p>
    </div>
</div>        