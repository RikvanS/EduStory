<p>Ben je een jongen? Of ben je een meisje?</p>
@csrf
<div class="buttons">
<div class="select-container">
<div class="select">
<select class="select-gender" name="gender" id="gender">
    <option class="select-gender" value="jongen">Jongen</option>
    <option class="select-gender" value="meisje">Meisje</option>
</select>
</div>
</div>
<button class="change-btn" onclick="loadDoc('POST', '/chapters/prologue/checkgender', changeDiv, 'change-div', 'gender')">Correct</button>
</div>