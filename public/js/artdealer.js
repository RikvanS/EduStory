function choice1() {
    var i = document.getElementById("reaction-4");
    var x = document.getElementById("reaction-1");
    var y = document.getElementById("reaction-2");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "block";

    } else {
        x.style.display = "none";
        y.style.display= "none";
        i.style.display="none";
    }
}

function choice2() {
    var x = document.getElementById("reaction-3");
    var y = document.getElementById("photogallery");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "block";
    } else {
        x.style.display = "none";
        y.style.display = "none";
    }
}

function choice3() {
    var i = document.getElementById("reaction-4");
    if (i.style.display = "none") {
        i.style.display = "block";
    }
        else {
            console.log("check");
            i.style.display = "none";
        }

        document.getElementById('hidden-progress-div').style.display='block';

}

var t = document.getElementById("pgallery");
var x = document.getElementById("photogallery");

x.onclick = function() {
    
    pgallery.style.display = "block";
} 

var span = document.getElementsByClassName('hide')[0];

t.onclick = function(event) {
    if (event.target == t) {
        t.style.display = "none";
    }
} 

span.onclick = function() {
    pgallery.style.display = "none";
}