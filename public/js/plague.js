String.prototype.shuffle = function() {
    var a = this.split(""),
        n = a.length;
    for (var i = n - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var tmp = a[i];
        a[i] = a[j];
        a[j] = tmp;
    }
    return a.join("");
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
var wordbank = ['website', 'virtual', 'version', 'utility', 'toolbar',
    'storage', 'spyware', 'spammer', 'scanner', 'runtime', 'restore',
    'program', 'process', 'privacy', 'printer', 'podcast', 'offline',
    'network', 'monitor', 'malware', 'lurking', 'keyword', 'integer',
    'exabyte', 'encrypt', 'dynamic', 'digital', 'desktop', 'compile',
    'command', 'captcha', 'browser'
];
var rndNum = getRandomInt(0, wordbank.length - 1);
var word = wordbank[rndNum];
var currentWord = word;
var score = 0;

function play() {
    var rstring = word.shuffle();
    document.getElementById("1").innerHTML = rstring.charAt(0);
    document.getElementById("2").innerHTML = rstring.charAt(1);
    document.getElementById("3").innerHTML = rstring.charAt(2);
    document.getElementById("4").innerHTML = rstring.charAt(3);
    document.getElementById("5").innerHTML = rstring.charAt(4);
    document.getElementById("6").innerHTML = rstring.charAt(5);
    document.getElementById("7").innerHTML = rstring.charAt(6);
}
var squares = document.getElementById("board").getElementsByTagName("td");
for (var i in squares) {
    squares[i].onclick = play;
}
document.getElementById("next").onclick = function() {
    for (var i in squares) {
        squares[i].innerHTML = '';
    }
    rndNum = getRandomInt(0, wordbank.length - 1);
    word = wordbank[rndNum];
}
document.getElementById("rules").onclick = function() {
    console.log("check");
    swal(
        ' Try to guess the scrambled word. Click on any tile to shuffle the letters. Good luck!'
    );
}
document.getElementById("hint").onclick = function() {
    swal("The first letter is " + word[0] + ".");
}
$('#board tr').sortable({
    placeholder: '#board tr',
    update: function checkOrder(event, ui) {
        var tiles = $('td');
        var tempWord = '';
        for (var i = 0; i < tiles.length; i++) {
            var letter = $(tiles[i]).text();
            tempWord += letter;
        }
        if (tempWord === word) {
            swal("Correct!", "You guessed the word!", "success");
            $('ul').append('<li>' + word + '</li>');
            score++
            $('#score').text(score);
        }
    }
});

function blinker() {
    $('.blinking').fadeOut(500);
    $('.blinking').fadeIn(500);
}
setInterval(blinker, 1000);
