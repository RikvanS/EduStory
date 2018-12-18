var modal = document.getElementById('infomodal');

var info = document.getElementById('infobutton');

info.onclick = function() {
    modal.style.display = "block";
}
window.onclick = function(event) {
    console.log('test');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}