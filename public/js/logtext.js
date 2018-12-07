var currentURL = window.location.href;

var lubeck = 0;
var visby = 0;
var danzig = 0;

$( document ).ready(function() {

    if(currentURL == "http://localhost:8000/chapters/1")
    {
        var lubeck = 1;
    }

    if(currentURL == "http://localhost:8000/chapters/2a")
    {
        var visby = 1;
    }

    if(currentURL == "http://localhost:8000/chapters/2b")
    {
        var danzig = 1;
    }

    if(lubeck == 1) 
    {
        $('#lubeck').show();
        
    }

    else if(visby == 1) 
    {
        $('#visby').show();
    }

    else if(danzig == 1) 
    {
        $('#danzig').show();
    }

    else {
        $('#default-content').show();
    }
});

// $( document ).ready(function() {
//     var currentURL = window.location.href; //grab the current window location

//     var targetDiv = $("#lubeck"); //change this as per your code

//     if(currentURL == "http://localhost:8000/chapters/1")
//     {
//         targetDiv.show(); //show the div if matched the current location
//     }   
// });

// $(document).ready(function() {
// 	// Check if the URL parameter is apples
// 	if (dynamicContent == '1') {
// 		$('#lubeck').show();
// 	} 
// 	// Check if the URL parameter is oranges
// 	else if (dynamicContent == '2a') {
// 		$('#visby').show();
// 	} 
// 	// Check if the URL parameter is bananas
// 	else if (dynamicContent == '2b') {
// 		$('#danzig').show();
// 	} 
// 	// Check if the URL parmeter is empty or not defined, display default content
// 	else {
// 		$('#default-content').show();
// 	}
// });