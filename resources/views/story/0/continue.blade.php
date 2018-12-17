<p>Dus je heet {{ Auth::user()->name }} en je bent {{ Auth::user()->age }} jaar oud en je bent een {{ Auth::user()->gender }}.</p>

<p>Welkom bij onze bemanning! De volgende bestemming is Lubeck. Hijs de zeilen!</p>

<button type="button" id="button-c" class="button" onclick="loadDoc('GET', '/storesetsail1', nextChapter, '/chapters/prologue/setsail')"> Vaar naar Lubeck</button>
