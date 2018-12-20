<p>Dus je bent al {{ $age }} jaar oud? Gefeliciteerd!</p>
<input class="input-text" type="hidden" id="age" name="age" value="{{ $age }}">
<button class="change-btn" onclick="loadDoc('POST', '/chapters/prologue/storeage', changeDiv, 'change-div',  'age')">Ja!</button>
<button class="change-btn" onclick="loadDoc('GET', '/chapters/prologue/askage', changeDiv, 'change-div')">Nee</button>