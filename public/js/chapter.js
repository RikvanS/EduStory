var modal = document.getElementById('logModal');

var book = document.getElementById('book-btn');
var map = document.getElementById('map-btn');

var span = document.getElementsByClassName('close')[0];

book.onclick = function() {
    modal.style.display = "block";
}

map.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }