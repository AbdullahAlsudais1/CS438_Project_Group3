<?php  include 'CheckDB.php';

$myid= $_SESSION["ID"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Scores</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="highscores.css">
</head>
<body>
    <!-- Our same lovely container, still haven't added the href for the button -->
    <div class="container">
        <div id="highScores" class="flex-center flex-column">
            <h1 id="finalScore">High Scores</h1>
            <ul id="highScoresList"></ul>
            <a class="button" href="homepage.php">Go Home</a>
        </div>
    </div>
    <script src="highscores.js"></script>
</body>
</html>