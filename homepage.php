<?php  include 'database and php files/CheckDB.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="quizpage.css">
  </head>
  <body>
    
    <h3> <?php echo "Welcome &nbsp;".  $_SESSION['FName'],"&nbsp;" . $_SESSION['LName'] ." &nbsp;to quiz app";?></h3>
  <center>  <a  class="button" href="Register and SignIN/logout.php">Logout</a></center>
    <hr>
    <div class="container">
      <div class="flex-center flex-column">
        <h1>Quiz</h1>

        <a class="button" href="quizpage.html">Play</a>
        <a class="button" href="highscores.php">Top Scores</a>
      </div>
    </div>
  </body>
</html>
<!-- This is a test for pushing/pulling and commiting changes --> 