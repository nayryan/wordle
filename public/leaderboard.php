<?php
session_start();

if (!isset($_SESSION['leaderboard'])) {
    $_SESSION['leaderboard'] = array(); 
}
function addScore($name, $score) {
    $newEntry = array("name" => $name, "score" => $score);
    array_push($_SESSION['leaderboard'], $newEntry);
    usort($_SESSION['leaderboard'], function ($item1, $item2) {
        return $item2['score'] <=> $item1['score'];
    });
    // Garder seulement les 10 meilleurs scores
    $_SESSION['leaderboard'] = array_slice($_SESSION['leaderboard'], 0, 10);
}

function getLeaderboard() {
    return $_SESSION['leaderboard'];
}