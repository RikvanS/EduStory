@extends('layouts/chapter')
@section('head')
<link rel="stylesheet" href="{{ URL::asset('css/epiloog.css') }}">

@endsection

@section('content')
<p><h2>Epiloog</h2></p>

<p>Hier komt een stuk verhaal waarin de protagonist weer teruggaat naar zijn/haar eigen tijd.</p>
<div class="hallucination" id="hallucination">
        <div class="colors" id="colors">
          <div class="text" id="text"></>
        </div>
      </div>

<p>--- Einde ---</p>
@endsection

@section('scripts')
<script src="{{ URL::asset('js/epiloog.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/6to5/3.6.5/browser-polyfill.js"></script>
    
@endsection