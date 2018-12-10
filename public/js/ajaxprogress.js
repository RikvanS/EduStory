function loadDocProgress(method, url) {
    console.log('loaddoc loaded');
    if (window.XMLHttpRequest) {
        var xhttp = new XMLHttpRequest();
    } else {
        var xhttp = new ActiveXObject();
    }

    xhttp.open(method, url, true);

    xhttp.setRequestHeader("X-CSRF-TOKEN", document.querySelector("meta[name='csrf-token']").getAttribute("content"));

    if (method == 'POST'){
        xhttp.send();
        console.log('post sent');
    }
}