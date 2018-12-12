<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/waves.css') }}">
    <link href="https://fonts.googleapis.com/css?family=MedievalSharp|Open+Sans|Almendra|Merriweather" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
    <div id="bliksem"></div>
    <div id="raincontainer">
        <script>
            for (var i = 0; i < 196; i++) {
                document.write("<div class='regen'></div>");
            }

            for (var i = 0; i < 36; i++) {
                document.write("<div class='regen' class='extraregen'></div>");
            }
        </script>
            </div>
    <div class="ocean">
        <div class="boat" style="background-image: url(/../images/chapters/ship-good.png)"></div>
    <div class="wave" style="background-image: url(/../images/chapters/wave.png);
    background-size: 50% 60px; animation: waves 4s linear infinite; opacity: 1; z-index: 14;"></div>
    <div class="wave" style="background-image: url(/../images/chapters/wave.png);
    background-size: 50% 250px; animation: waves 7s linear infinite; opacity: 0.75; z-index:11;"></div>
    <div class="wave" style="background-image: url(/../images/chapters/wave.png);
    background-size: 50% 250px; animation: waves 10s linear infinite; opacity: .5; z-index:10;"></div>
    <div class="wave" style="background-image: url(/../images/chapters/wave.png);
    background-size: 50% 270px; animation: waves 8s linear infinite; opacity: 0.6; z-index:12;"></div>
    </div><div class="textcontainer">

@yield('content')

        <script src="{{ asset('js/waves.js') }}"></script>
</body>
</html>