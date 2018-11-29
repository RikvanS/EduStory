@extends('layouts/app')

@section('content')
<p>Prologue</p>


<div id="change-div">
    <p>Hallo! Wat is jouw naam?</p>
    <input name="name" type="text" class="text">
    <button class="btn btn-primary" onclick="checkName()">Bevestig</button>
</div>



<p><a href="/chapters/1a">Choice A</a></p>

<p><a href="/chapters/1b">Choice B</a></p>

@endsection