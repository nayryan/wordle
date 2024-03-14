<?php
namespace Wordle;

class WordleEngine {
    public function calculateTurnScore($guess) {
        // Implémentez le calcul du score pour un tour (par exemple, basé sur la longueur du mot correctement deviné)
        // Vous pouvez ajuster la logique en fonction des règles spécifiques de votre jeu Wordle
        return strlen($guess);
    }

    public function updateTotalScore($game, $turnScore) {
        // Implémentez la mise à jour du score total du jeu
        $game->totalScore += $turnScore;

        // Gérez le bonus si nécessaire (par exemple, si le score total dépasse un certain seuil)
        // $game->bonus = ...
        
        return $game->totalScore;
    }
}