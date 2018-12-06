<p>Dus je naam is {{ $name }}?</p>
<input type="hidden" id="name" name="name" value="{{ $name }}">
<button onclick="loadDoc('POST', '/chapters/prologue/storename', changeDiv, 'change-div', 'name')">Ja</button>
<button onclick="loadDoc('GET', '/chapters/prologue/askname', changeDiv, 'change-div')">Nee</button>