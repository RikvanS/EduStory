<p>Dus je bent {{ $age }} jaar oud?</p>
<input type="hidden" id="age" name="age" value="{{ $age }}">
<button onclick="loadDoc('POST', '/chapters/prologue/storeage', changeDiv, 'change-div',  'age')">Ja</button>
<button onclick="loadDoc('GET', '/chapters/prologue/askage', changeDiv, 'change-div')">Nee</button>