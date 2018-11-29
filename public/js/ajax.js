function loadDoc(method, url, myFunction, data) {
    if (window.XMLHttpRequest) {
        var xhttp = new XMLHttpRequest();
    } else {
        var xhttp = new ActiveXObject();
    }
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }                    
    }
    xhttp.open(method, url, true);
    if (method == 'POST') {
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
    xhttp.send(data);
}

function changeDiv(xhttp) {
    document.getElementById('change-div').innerHTML = xhttp.responseText;
}