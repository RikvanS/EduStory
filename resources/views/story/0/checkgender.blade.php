
@if ($gender == 'jongen')
<p>Dus je bent een jongen?</p>
@else
<p>Dus je bent een meisje?</p>
@endif

<input class="text" type="hidden" id="gender" name="gender" value="{{ $gender }}">

<button class="change-btn" onclick="loadDoc('POST', '/chapters/prologue/storegender', changeDiv, 'change-div', 'gender')">Ja</button>
<button class="change-btn" onclick="loadDoc('GET', '/chapters/prologue/askgender', changeDiv, 'change-div')">Nee</button>