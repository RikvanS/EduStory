var logModal = document.getElementById('logModal');
var mapModal = document.getElementById('mapModal');

var book = document.getElementById('book-btn');
var map = document.getElementById('map-btn');

var span = document.getElementsByClassName('close')[0];

book.onclick = function() {
    logModal.style.display = "block";
    mapModal.style.display = "none";
}

map.onclick = function() {
    mapModal.style.display = "block";
    logModal.style.display = "none";
}

span.onclick = function() {
    logModal.style.display = "none";
}

window.onclick = function(event) {
    console.log('click');
    if (event.target == mapModal) {
        mapModal.style.display = "none";
    }
    if(event.target == logModal) {
        logModal.style.display = "none";
    }
}

