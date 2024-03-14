<?php
namespace Wordle;

class Word {
    public static function getRandomWord() {
        // Implémentez la logique pour récupérer un mot aléatoire depuis une liste de mots
        $words = ["apple", "banana", "orange"]; // Exemple de mots
        $randomIndex = array_rand($words);
        return strtoupper($words[$randomIndex]);
    }
}