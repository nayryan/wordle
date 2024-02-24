var height= 6; // nombre d;essaie
var width= 5; // longueur du mots a devine
var row=0; // essaie #
var col=0; //lettre
var gameOver = false;
var word = "SQUID";

window.onload = function(){
    intialize();
}

function intialize(){
    for (let r = 0; r < height; r++){
        for (let c = 0; c < width; c++){
            let tile = document.createElement("span");
            tile.id = r.toString() + "-" + c.toString();
            tile.classList.add("tile");
            tile.innerText = "P";
            document.getElementById("board").appendChild(tile);
        }
    }
}
