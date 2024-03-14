<?php
namespace Wordle;

class WordleGame {
    private $targetWord;

    public function __construct() {
        $this->targetWord = Word::getRandomWord();
    }

    public function getTargetWord() {
        return $this->targetWord;
    }
}