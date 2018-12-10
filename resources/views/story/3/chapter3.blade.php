@extends('layouts/chapter')
<head>
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
<link href="https://fonts.googleapis.com/css?family=MedievalSharp|Open+Sans|Almendra|Merriweather" rel="stylesheet">
</head> 

@section('content')
<p><h2>Riga</h2></p>

<p>In Riga leert de protagonist over de geschiedenis van Riga als handelsstad.</p>

<p>Informatie over wat er in Riga wordt verhandelt tussen het Oosten en het Westen.</p>

<p>Informatie over muntenslaan.</p>

<p>Optioneel: protagonist geeft brief af bij Lijfmansorde.</p>

<p>Algemene info over hanzesteden + quiz</p>

<div class="quiz-background">
        <div class="quiz-container">
            <div id="quiz"></div>
        </div>
        <button id="previous">Vorige vraag</button>
        <button id="next">Volgende vraag</button>
        <button id="submit">Klaar</button>
        <div id="results"></div>
        </div>
        <script src="../js/quiz.js"></script>
<p><a href="/chapters/epilogue">Ga naar epiloog</a></p>
@endsection

@section('scripts')
    
@endsection