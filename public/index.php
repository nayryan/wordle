<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordle Game</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div id="game">
    <!-- Game content goes here -->
    <h1>Wordle Game</h1>
    <div id="game-board">
        <!-- Game board elements -->
    </div>
    <div id="keyboard">
        <!-- Keyboard elements -->
    </div>
    <div id="game-status">
        <!-- Game status display -->
    </div>
</div>

<div id="leaderboard">
    <!-- Leaderboard content goes here -->
    <h2>Leaderboard</h2>
    <ol>
        <?php
        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=votre_base_de_donnees', 'votre_nom_utilisateur', 'votre_mot_de_passe');

        // Récupérer les 10 meilleurs scores depuis la base de données
        $query = $pdo->prepare("SELECT player_name, score FROM scores ORDER BY score LIMIT 10");
        $query->execute();
        $leaderboard = $query->fetchAll(PDO::FETCH_ASSOC);

        // Afficher les scores dans le leaderboard
        foreach ($leaderboard as $score) {
            echo '<li>' . $score['player_name'] . ': ' . $score['score'] . '</li>';
        }
        ?>
    </ol>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // JavaScript code for Wordle game
    // This script will handle game logic
</script>

</body>
</html>