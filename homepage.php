<?php  include 'database and php files/CheckDB.php';?>
<!DOCTYPE html>

  <head>
    
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="homepage.css?v=<?php echo time(); ?>">
  </head>
  <body>

   <div class="button1"><a  class="button" href="Register and SignIN/logout.php">Logout</a></div>
   <h3>Home page</h3>
   <hr>
  <div class="Profile">
    <h3>Profile</h3>
        <p><strong>Name: </strong> <?php echo  $_SESSION['FName'],"&nbsp;" . $_SESSION['LName']; ?></p> <br><br>
        <p><strong>Email:</strong>  <?php echo $_SESSION['Email'];   ?></p>
  </div>

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