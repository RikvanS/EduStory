function choice1() {
    var i = document.getElementById("reaction-4");
    var x = document.getElementById("reaction-1");
    var y = document.getElementById("reaction-2");
    var w = document.getElementById("reaction-3");
    var t = document.getElementById("choice");
    if (x.style.display === "none") {
        x.style.display = "block";
        t.style.display = "none";
        y.style.display = "block";
        w.style.display = "none"

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
    var x = document.getElementById("reaction-5");
    var t = document.getElementById("reaction-2");

    if (i.style.display == "none" && x.style.display == "none") {
        i.style.display = "block";
        x.style.display = "block";
        t.style.display = "none";
    }
        else {
            console.log("check");
            i.style.display = "none";
            x.style.display = "none";
        }

        document.getElementById('hidden-progress-div').style.display='block';

}

function choice4() {
    var i = document.getElementById("reaction-1");
    var x = document.getElementById("begin");
    var m = document.getElementById("reaction-2");
    var w = document.getElementById("reaction-5");
    var t = document.getElementById("reaction-4");
    var y = document.getElementById("choice");

    if (t.style.display = "block") {
        t.style.display = "none";
        m.style.display = "none";
        y.style.display = "none";
        i.style.display = "none";
        y.style.display = "block";
        w.style.display = "none";
        x.style.display = "block";
    }
        else {
            console.log("check");
            i.style.display = "none";
            x.style.display = "none";
        }


}


var t = document.getElementById("pgallery");
var x = document.getElementById("photogallery");
var y = document.getElementById("photomodal");


x.onclick = function() {
    
    t.style.display = "block";
} 

var span = document.getElementsByClassName('hide')[0];

t.onclick = function(event) {
    
    console.log("test2");
    if (event.target == t) {
        t.style.display = "none";
    }
} 



span.onclick = function() {
    console.log("test3");
    t.style.display = "none";
}
