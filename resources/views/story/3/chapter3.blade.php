@extends('layouts/chapter')
<head>
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
<link href="https://fonts.googleapis.com/css?family=MedievalSharp|Open+Sans|Almendra|Merriweather" rel="stylesheet">
</head> 

@section('content')
<p><h2>Riga</h2></p>

<p>     Na een lange tocht, komt eindelijk de haven in zicht. De ervaren zeelieden beginnen het koggeschip aan te meren en uit te laden.” 
        {{ Auth::user()->name }} !” hoor je achter je. Jan gebaart je om hem te volgen. Je bent opgelucht dat je de zware koopwaar niet hoeft uit te laden. 
        Riga is al sinds 1282 lid van het Hanzeverbond. Kijk eens naar die prachtige gildehuizen.” 
        Je kijk rond, maar eigenlijk lijken alle huizen hetzelfde, ze zijn er allemaal super ouderwets uit. 
        Je knikt maar gewoon en doet alsof je weet waar hij het over heeft. 
       </p>

<p>Informatie over wat er in Riga wordt verhandelt tussen het Oosten en het Westen.</p>

<p>Informatie over muntenslaan.</p>

<p>Optioneel: protagonist geeft brief af bij Lijfmansorde.</p>

<p>"Je bent een goeie scheepsmaat, {{ Auth::user()->name }}" zegt Jan, en hij slaat een arm om je heen. 
    Door deze gekke reis ben je blij dat er iemand bij je is die op je let. "Dankjewel Jan, zonder jou had ik niet geweten wat ik had moeten doen!" vertel je hem.
    "Weet je nog wat je allemaal geleerd hebt?" vraagt hij.</p>

<div class="quiz-background">
        <div class="quiz-container">
            <div id="quiz"></div>
        </div>
        <button id="previous">Vorige vraag</button>
        <button id="next">Volgende vraag</button>
        <button id="submit">Klaar</button>
        <div id="results"></div>
        </div>




@if(Auth::user()->progression->rigaquiz == true)
<button id="complete-rigaquiz">Testknop spelvoltooiing</button>
@endif

<div style="display:none" id="progressdiv">
    <p><a href="/chapters/epilogue">Ga naar epiloog</a></p>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('js/quiz.js') }}"></script>
<script src="{{ asset('js/quizprogress.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>
@endsection