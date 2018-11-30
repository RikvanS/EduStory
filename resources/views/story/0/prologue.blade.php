@extends('layouts/chapter')

@section('content')

    <p><h2>Prologue</h2></p>



<div>
    <p>Hier komt een stukje verhaal over iemand die in het water valt en wakker wordt in Groningen in de middeleeuwen. Iemand vraagt hem:</p>
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
