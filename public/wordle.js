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
            tile.innerText = "";
            document.getElementById("board").appendChild(tile);
        }
    }
    document.addEventListener("keyup", (e) => {
        if (gameOver) return;
        if ("KeyA" <= e.code && e.code <= "KeyZ"){
            if (col < width){
                let currTile =document.getElementById(row.toString() + '-' + col.toString());
                if (currTile.innerText == ""){
                    currTile.innerText = e.code[3]
                    col += 1;
                }
            }

        }
    });
}
