// la fonction qui vas creer la board dans laquelle on vas jouer 
function createBoard() {
    // on passe a travers les rows et le columns qui sont les dimensions de la grille 
    for (let r = 0; r < height; r++) {
        for (let c = 0; c < width; c++) {
            let tile = document.createElement("span");
            tile.id = r.toString() + "-" + c.toString();
            tile.classList.add("tile");
            tile.innerText = "";
            document.getElementById("board").appendChild(tile);
        }
    }
}