
@if ($gender == 'jongen')
<p>Dus je bent een jongen?</p>
@else
<p>Dus je bent een meisje?</p>
@endif

<input type="hidden" id="gender" name="gender" value="{{ $gender }}">

<button onclick="loadDoc('POST', '/chapters/prologue/storegender', changeDiv, 'change-div', 'gender')">Ja</button>
<button onclick="loadDoc('GET', '/chapters/prologue/askgender', changeDiv, 'change-div')">Nee</button>