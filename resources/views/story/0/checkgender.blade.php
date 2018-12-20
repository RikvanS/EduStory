
@if ($gender == 'jongen')
<p>Jongens zijn de beste! Jij bent ook een jongen?</p>
@else
<p>Meisjes zijn de beste! Jij bent ook een meisje?</p>
@endif

<input class="input-text" type="hidden" id="gender" name="gender" value="{{ $gender }}">

<button class="change-btn" onclick="loadDoc('POST', '/chapters/prologue/storegender', changeDiv, 'change-div', 'gender')">Echt wel!</button>
<button class="change-btn" onclick="loadDoc('GET', '/chapters/prologue/askgender', changeDiv, 'change-div')">Nee hoor</button>