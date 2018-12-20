<p>Wauw, heet je echt {{ $name }}? Wat een bijzondere naam.</p>
<input class="input-text" type="hidden" id="name" name="name" value="{{ $name }}">
<button class="change-btn" onclick="loadDoc('POST', '/chapters/prologue/storename', changeDiv, 'change-div', 'name')">Ja, dankje</button>
<button class="change-btn" onclick="loadDoc('GET', '/chapters/prologue/askname', changeDiv, 'change-div')">Euhm, nee?</button>