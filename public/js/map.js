var g = document.getElementById('gro-description');
var l = document.getElementById('lub-description');
var v = document.getElementById('vis-description');
var d = document.getElementById('gda-description');
var r = document.getElementById('rig-description');

var groningen = document.getElementById('groningen-icon');
var lubeck = document.getElementById('lubeck-icon');
var visby = document.getElementById('visby-icon');
var gdansk = document.getElementById('gdansk-icon');
var riga = document.getElementById('riga-icon');

groningen.onclick = function() {
    console.log('groningen');
    g.style.display = "block";
    l.style.display = "none";
    v.style.display = "none";
    d.style.display = "none";
    r.style.display = "none";
}

lubeck.onclick = function() {
    console.log('lubeck');
    g.style.display = "none";
    l.style.display = "block";
    v.style.display = "none";
    d.style.display = "none";
    r.style.display = "none";
}

visby.onclick = function() {
    console.log('visby');
    g.style.display = "none";
    l.style.display = "none";
    v.style.display = "block";
    d.style.display = "none";
    r.style.display = "none";
}

gdansk.onclick = function() {
    console.log('gdansk');
    g.style.display = "none";
    l.style.display = "none";
    v.style.display = "none";
    d.style.display = "block";
    r.style.display = "none";
}

riga.onclick = function() {
    console.log('riga');
    g.style.display = "none";
    l.style.display = "none";
    v.style.display = "none";
    d.style.display = "none";
    r.style.display = "block";
}
