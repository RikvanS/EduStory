imgdir = "../images/hanoi/";
        
        
function preload() {
    this.length = preload.arguments.length;
    for (var i = 0; i < this.length; i++) {
        this[i] = new Image();
        this[i].src = imgdir + preload.arguments[i];
    }
}

var pics = new preload("box1.png", "box2.png", "box3.png", "box4.png", "box1h.png", "box2h.png", "box3h.png", "box4h.png");

var selectedr = null;
var selectedc = null;
var maxposts = 3;
var maxdisks = 4;
var all_posts = 3;
var startpost = 1;
var endpost = (startpost-1 < 0 ? maxposts-1 : startpost-1);
var disks = 4;
var game_is_over = false;
var show_messages = false;
var board = new Array(maxposts);
board[0] = new Array(maxdisks + 1);
board[1] = new Array(maxdisks + 1);
board[2] = new Array(maxdisks + 1);

function initboard(startpost, disks) {
    var len = board[0].length;
    selectedc = null;
    selectedr = null;
    game_is_over = false;
    endpost = (startpost-1 < 0 ? maxposts-1 : startpost-1);
    
    for (i = 0; i < len; i++) {
        board[0][i] = 0;
        board[1][i] = 0;
        board[2][i] = 0;
    }
    for (i = len-disks, j = 0; i < len; i++, j++) {
        board[startpost][i] = len - j - 1;
    }
}

function drawall() {
    for (j=0; j<board.length; j++) {
        for (i=0; i<board[j].length; i++) {
            draw(j,i, getName( board[j][i]));
        }
    }
    message("Je mag beginnen! Klik op een krat om hem te verplaaten.");
}

function restart(start) {
    startpost = start;
    initboard(1,4);
    drawall();
    theAnim = new Animation();
}

initboard(startpost, disks);

function getName( num ) {
    if (num == 0) return "post.png";
    return "box" + num + ".png";
}

function message(str, force) {
    if (force || !game_is_over && !show_messages)
        document.disp.message.value = str;
}

function messageadd(str) {
    if (!game_is_over)
        document.disp.message.value = document.disp.message.value + "\n" + str;
}

function isempty(num) {
    for (i = 0; i < board[num].length; i++) {
        if ( board[num][i] != 0) return false;
    }
    return true;
}

function topmost(num) {
    for (i = 0; i < board[num].length; i++) {
        if (board[num][i] != 0) return  i;
    }
    return -1;
}

function ispost(i,j) {
    return (board[j][i] == 0);
}

function istopdisk(i,j) {
    return (board[j][i-1] == 0);
}

function drawboard() {
    document.write("<tr id='hanoi-row'>");

    //tower 1
    document.write("<td>");
    document.write("<img src='" + imgdir + "blank.png' border=0>")
    for (i=1; i< board[0].length; i++) {
        document.write("<a href='javascript:clicked("+i+","+0+")'><img src='" + imgdir + getName(board[0][i]) + "' name='pos"+ 0 + i + "' border=0></a>");
    }
    document.writeln("</td>");

    //tower 2
    document.write("<td>");
    document.write("<img src='" + imgdir + "blank.png' border=0>")
    for (i=1; i< board[0].length; i++) {
        document.write("<a href='javascript:clicked("+i+","+1+")'><img src='" + imgdir + getName(board[1][i]) + "' name='pos"+ 1 + i + "' border=0></a>");
    }
    document.writeln("</td>");

    //space 1
    document.write("<td class='rope-column'>");
    document.write("<img src='" + imgdir + "space1.png' border=0>");
    document.writeln("</td>");

    //tower 3
    document.write("<td>");
    for (i=1; i< board[0].length; i++) {
        document.write("<a href='javascript:clicked("+i+","+2+")'><img src='" + imgdir + getName(board[2][i]) + "' name='pos"+ 2 + i + "' border=0></a>");
    }
    document.write("<img src='" + imgdir + "platform.png' border=0>")
    document.writeln("</td>");

    //space 2
    document.write("<td class='rope-column'>");
    document.write("<img src='" + imgdir + "space2.png' border=0>");
    document.writeln("</td>");

    document.write("</tr>");



    //floor
    document.write("<tr>");
    document.write("<td colspan=5>");
    document.write("<img src='" + imgdir + "full-floor.png' border=0>");
    document.writeln("</td>");

    document.write("</tr>");

    document.write("</table>");
}

function draw(x,y,name) {
    document.images["pos"+x+""+y].src = imgdir + name;
}

function animate(x,y,name) {
    theAnim.addFrame( "pos"+x+""+y, imgdir + name);
}

function clicked(i,j) {
    document.forms[0].message.focus(); // get rid of annoying outline in MSIE
    document.forms[0].message.blur();
    
    if (game_is_over) {
        drawfinish();
    };
    if (!isselection() && ispost(i,j)) { message("Kies een krat om te verplaatsen."); return; }
    if (!ispost(i,j)) { toggle(j); return; };
    if (ispost(i,j) && selectedc == j) { message("Verplaats het krat naar een andere plek."); return; }
    if (!legalmove(j)) { message("Dat krat is te zwaar voor het krat eronder! Zet het ergens anders neer of haal eerst het lichtere krat weg."); return; }
    move(j);
    return;
}

function legalmove(j) {
if (isempty(j)) return true;
return (board[j][topmost(j)] < board[selectedc][selectedr]);
}

function isselection() {
return selectedc != null;
}

function toggle( num ) {
var toppos = topmost(num);

if (selectedc == num && selectedr == toppos) {
selectedc = null; selectedr = null;
animate(num,toppos,"box" + board[num][toppos] + ".png");
message("Kies een krat om te verplaatsen.");
return;
}
if (isselection()) {
animate(selectedc,selectedr,"box" + board[selectedc][selectedr] + ".png");
}
selectedc = num; selectedr = toppos;
animate(num,toppos,"box" + board[num][toppos] + "h.png");
message("Klik op de plek waar je het krat wilt neerzetten.");
}

function move( num ) {
var toppos = (!isempty(num) ? topmost(num) : board[num].length);
board[num][toppos-1] = board[selectedc][selectedr];
board[selectedc][selectedr] = 0;
animate(selectedc,selectedr,"post.png");
animate(num,toppos-1,"box" + board[num][toppos-1] + ".png");
selectedc = null; selectedr = null;
message("Kies een krat om te verplaatsen.");
game_over();
}


function game_over(forceMsg) {
    var filledpost = null;
    var val = 0;
    for (k = 0; k < 2; k++)  {
        val += ( isempty(k) ? 1 : 0 );
        if (!isempty(k)) filledpost = k;
    }
    
    if (val == 2 && isempty(startpost)) {
        message("Je hebt gewonnen!", forceMsg);
        game_is_over = true;
        endpost = filledpost;
        loadDoc('GET', '/chapters/danzig/danzig-hanoi', workplease);
    }            
    return game_is_over;            
}

//
// Animation functions
//

function Animation() {
this.imageNum = new Array();  // Array of indicies document.images to be changed
this.imageSrc = new Array();  // Array of new srcs for imageNum array
this.frameIndex = 0;          // the frame to play next
this.alreadyPlaying = false;  // semaphore to ensure we play smoothly

this.getFrameCount = getframecount;   // the total numebr of frame so far
this.moreFrames = moreframes;         // tells us if there are more frames to play
this.addFrame = addframe;             // add a frame to the animation
this.drawNextFrame = drawnextframe;   // draws the next frame
this.startAnimation = startanimation; // start the animation if necessary
}

function getframecount() {  return this.imageNum.length; }
function moreframes() {  return this.frameIndex < this.getFrameCount(); }
function startanimation() {
if (!this.alreadyPlaying) {
theAnim.alreadyPlaying = true;
setTimeout('theAnim.drawNextFrame()',5);
   }
}

function addframe(num, src) {
var theIndex = theAnim.imageNum.length;
theAnim.imageSrc[theIndex] = src;
theAnim.imageNum[theIndex] = num;
theAnim.startAnimation();
}

function drawnextframe() {
if (theAnim.moreFrames()) {
document.images[ theAnim.imageNum[theAnim.frameIndex] ].src = theAnim.imageSrc[theAnim.frameIndex];
theAnim.frameIndex++;
setTimeout('theAnim.drawNextFrame()', 30);
} else {
theAnim.alreadyPlaying = false;
   }
}

drawboard();
var theAnim = new Animation();
message("Klaar om te beginnen! Klik op een krat om hem te verplaatsen.");

function drawfinish() {
    document.getElementById('hanoi-row').innerHTML = "<td><img src='" + imgdir + "hoistingup.gif' border=0></td>";
}