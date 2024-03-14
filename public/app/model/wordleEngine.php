<?php
namespace Wordle;

class WordleEngine {
    private $game;

    public function __construct() {
        $this->game = new WordleGame();
    }

    public function startGame() {
        // Logique pour démarrer le jeu
    }
}
