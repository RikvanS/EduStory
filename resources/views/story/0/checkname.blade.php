<p>Dus je naam is {{ $name }}?</p>
<input type="hidden" name="name" value="{{ $name }}">
<button onclick="loadDoc('POST', '/chapters/prologue/storename', changeDiv, 'name')">Ja</button>
<button onclick="loadDoc('GET', '/chapters/prologue/askname', changeDiv)">Nee</button>