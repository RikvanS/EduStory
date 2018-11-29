@extends('layouts/app')

@section('content')

<script>

function loadDoc(method, url, myFunction, input) {
    if (window.XMLHttpRequest) {
        var xhttp = new XMLHttpRequest();
    } else {
        var xhttp = new ActiveXObject();
    }
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }                    
    }
    xhttp.open(method, url, true);
    if (method == 'POST') {
        var data = input + "=" + document.getElementById(input).value;
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.setRequestHeader("X-CSRF-TOKEN", document.querySelector("meta[name='csrf-token']").getAttribute("content"));
        xhttp.send(data);
    } else {
        xhttp.send();
    }
}

function changeDiv(xhttp) {
    document.getElementById('change-div').innerHTML = xhttp.responseText;
}

</script>

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

@endsection