var logModal = document.getElementById('logModal');
var mapModal = document.getElementById('mapModal');
var modal = document.getElementsByClassName('modal');

var book = document.getElementById('book-btn');
var map = document.getElementById('map-btn');

var span = document.getElementsByClassName('close')[0];

book.onclick = function() {
    logModal.style.display = "block";
}

map.onclick = function() {
    mapModal.style.display = "block";
}

span.onclick = function() {
    logModal.style.display = "none";
    mapModal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}