<?php
namespace Wordle;

class WordleGame {
    private $targetWord;
    private $guesses;
    private $currentState;
    private $currentTurn;

    public function __construct() {
        $this->targetWord = Word::getRandomWord();
        $this->guesses = [];
        $this->currentState = []; // Array to store current state of guessed letters
        $this->currentTurn = 0;
    }

    public function getTargetWord() {
        return $this->targetWord;
    }
}