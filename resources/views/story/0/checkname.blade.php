<p>Dus je naam is {{ $name }}?</p>
<input class="text" type="hidden" id="name" name="name" value="{{ $name }}">
<button class="change-btn" onclick="loadDoc('POST', '/chapters/prologue/storename', changeDiv, 'change-div', 'name')">Ja</button>
<button class="change-btn" onclick="loadDoc('GET', '/chapters/prologue/askname', changeDiv, 'change-div')">Nee</button>