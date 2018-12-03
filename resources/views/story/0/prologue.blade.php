@extends('layouts/chapter')

@section('content')

    <p><h2>Proloog</h2></p>

<div>
    <p>Protagonist in de 21 eeuw: valt in het water</p>
</div>

<div>
    <p>Paralax van golven terwijl de protagonist in het water valt hier</p>
</div>

<div>
    <p>Tijdlijn die terugloopt van 2018 naar 1393</p>
</div>

<div>
    <p>Hier komt een stuk verhaal over de protagonist die dingen meemaakt in Groningen n.a.v. Anna's onderzoek.</p>
</div>

<div>
    <p>De protagonist beland in de haven (hoge der Aa), en wordt aangezien voor een scheepsjongen. Hij wordt aan boord van een schip getrokken. Als ze onderweg zijn, realiseert iemand wat er is gebeurd en vraagt aan de protagonist:</p>
</div>

<div id="change-div">
    <p>Wat is jouw naam?</p>
    @csrf
    <input id="name" name="name" type="text" class="text">
    <button onclick="loadDoc('POST', '/chapters/prologue/checkname', changeDiv, 'name')">Bevestig</button>
</div>

<br>

</body>

@endsection

@section('scripts')
<script src="{{ URL::asset('js/ajax.js') }}"></script>
@endsection
