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

document.getElementById('choice-1').addEventListener('click', cleanupchoice1);

function cleanupchoice1() {
    if (document.getElementById("reaction-3").style.display === 'block') {
        document.getElementById("reaction-3").style.display = 'none';
    }
    if (document.getElementById("photogallery").style.display === 'block') {
        document.getElementById("photogallery").style.display = 'none';
    }
}

document.getElementById('choice-2').addEventListener('click', cleanupchoice2);

function cleanupchoice2() {
    if (document.getElementById("reaction-1").style.display === 'block') {
        document.getElementById("reaction-1").style.display = 'none';
    }
    if (document.getElementById("reaction-2").style.display === 'block') {
        document.getElementById("reaction-2").style.display = 'none';
}
    if (document.getElementById("reaction-4").style.display === 'block') {
    document.getElementById("reaction-4").style.display = 'none';
}
}