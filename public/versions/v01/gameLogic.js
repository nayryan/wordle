// Vérifie si le mot deviné est dans la liste des mots à deviner
function checkWordInList(guess) {
    return guessList.includes(guess);
}

// Compte le nombre de chaque lettre dans le mot à deviner
function countLettersInWord() {
    let letterCount = {};
    for (let i = 0; i < word.length; i++) {
        let letter = word[i];

        if (letterCount[letter]) {
            letterCount[letter] += 1;
        } else {
            letterCount[letter] = 1;
        }
    }
    return letterCount;
}

// Marque les lettres correctes dans le tableau de jeu et le clavier
function markCorrectLetters() {
    let correct = 0;
    let letterCount = countLettersInWord();

    for (let c = 0; c < width; c++) {
        let currTile = document.getElementById(row.toString() + '-' + c.toString());
        let letter = currTile.innerText;

        if (word[c] == letter) {
            currTile.classList.add("correct");
            let keyTile = document.getElementById("Key" + letter);
            keyTile.classList.remove("present");
            keyTile.classList.add("correct");
            correct += 1;
            letterCount[letter] -= 1;
        }

        if (correct == width) {
            gameOver = true;
        }
    }
}

// Marque les lettres incorrectes et absentes dans le tableau de jeu et le clavier
function markIncorrectLetters() {
    for (let c = 0; c < width; c++) {
        let currTile = document.getElementById(row.toString() + '-' + c.toString());
        let letter = currTile.innerText;

        if (!currTile.classList.contains("correct")) { 
            if (word.includes(letter) && letterCount[letter] > 0) {
                currTile.classList.add("present");
                let keyTile = document.getElementById("Key" + letter);
                if (!keyTile.classList.contains("correct")) {
                    keyTile.classList.add("present");
                }
                letterCount[letter] -= 1;
            } else {
                currTile.classList.add("absent");
                let keyTile = document.getElementById("Key" + letter);
                keyTile.classList.add("absent")
            }
        }
    }
}