
var d = document,
left = d.getElementById("left"),
right = d.getElementById("right"),
carousel = d.getElementById("carousel"),
heart = d.getElementsByClassName("fa-heart"),
deg = 0;
left.addEventListener("click", function() {
	deg += 45;
	carousel.style.transform = "rotateY(" + deg + "deg)";
});
right.addEventListener("click", function() {
	deg -= 45;
	carousel.style.transform = "rotateY(" + deg + "deg)";
});
for(var i = 0; i < heart.length; i++) {
	heart[i].addEventListener("click", function() {
	if(this.classList.contains("far")) {
		this.classList.add("fas");
		this.classList.remove("far");
	}
	else {
		this.classList.add("far");
		this.classList.remove("fas");
	}
	});
}

