<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/chapters.css') }}">
    <link href="https://fonts.googleapis.com/css?family=MedievalSharp|Open+Sans|Almendra|Merriweather" rel="stylesheet"> 
    <title>EduStory @yield('title')</title>
</head>
<body>
    <div class="head-image" id="chapter1"></div>
    @include('includes/sidebar')
    <div class="container">
        @yield('content')
              
    </div>
    <script src="{{ URL::asset('js/chapter.js') }}"></script>
</body>
</html>