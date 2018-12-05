function choice1() {
    var x = document.getElementById("reaction-1");
    var y = document.getElementById("reaction-2");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "block";

    } else {
        x.style.display = "none";
        y.style.display= "none";
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

function modal() {
    var x = document.getElementById("pgallery");
    
    if (x.style.display === "none") {
        x.style.display = "block";
        
    } else {
        x.style.display = "none";
      
    }
}