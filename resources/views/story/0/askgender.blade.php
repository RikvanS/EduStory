<p>Ben je een jongen? Of ben je een meisje?</p>
@csrf
<select name="gender" id="gender">
    <option value="jongen">Jongen</option>
    <option value="meisje">Meisje</option>
</select>
<button onclick="loadDoc('POST', '/chapters/prologue/checkgender', changeDiv, 'change-div', 'gender')">Bevestig</button>