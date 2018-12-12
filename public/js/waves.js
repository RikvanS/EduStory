window.onload = function () {
    lightRain();
}

var rain = document.getElementsByClassName("regen");


function lightRain() {
    document.body.style.backgroundColor = "#d3d3d3";
    for (var i = 0; i < rain.length; i++) {
        rain[i].style.setProperty("animation-duration", Math.random()*2.5 + 1.8 + "s")
        rain[i].style.setProperty("left", Math.random()*window.innerWidth + "px")
        rain[i].style.setProperty("animation-delay", Math.random()*4 + 0.1 + "s")
    }
}

function heavyRain() {
    /*document.body.style.backgroundColor = "#aaa9a9";*/
    for (var i = 0; i < rain.length; i++) {
    rain[i].style.setProperty("animation-duration", Math.random()*2 + 0.5 + "s")
    rain[i].style.setProperty("left", Math.random()*window.innerWidth + "px")
    }
}

function noRain() {
    document.body.style.backgroundColor = "#ebe9e9";
    for (var i = 0; i < rain.length; i++) {
        rain[i].style.display = "none";
    }
}