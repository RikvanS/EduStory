@extends('layouts/chapter')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/hanoi.css') }}">
@endsection

@section('content')
<p><h2>Gdansk</h2></p>

<p>Protagonist moet de kraan met hamsterwielen gebruiken om zware materialen van het schip te laden.</p>

<div id="hanoi-parent">

    <table id='hanoi-table' border="0" cellspacing=0 cellpadding=0>
        
        <tr>
            <td colspan=5 id="hanoi-instructions">
                <form name='disp'>
                    <textarea id="hanoi-textarea" name='message' wrap=virtual rows=2 cols=40></textarea>
                </form>
            </td>
        </tr>
        <script src="/js/hanoi.js"></script>
</div>

<p>Daarna moeten er bouwmaterialen naar de kerk gebracht worden. Daar leert de protagonist over de bouw vd kerk en architecten.</p>

<p>Vanaf de warenhuizen moet er graan/potas/teer ingeladen worden. Hier leert de protagonist over het effect van oorlogen op handelsroutes.</p>

<p>Optioneel: protagonist krijgt een brief mee van de Duitse Orde voor de Lijfmansorde in Riga.</p>

<p><a href="/chapters/2/setsail">Vaar naar Riga</a></p>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
@endsection