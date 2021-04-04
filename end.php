<?php  include 'CheckDB.php';

$myid= $_SESSION["ID"];

         $name = "SELECT Fname FROM player WHERE ID='$myid' ";
        $result = mysqli_query($conn, $checkDB);
        $name = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congrats!</title>
    <link rel="stylesheet" href="homepage.css">
  </head>
  <body>
    <!-- We are having the same container class for our end page
    The input is for saving and it will be disabled until the username box is !null
  test comment -->
    <div class="container">
        <div id="end" class="flex-center flex-column">
            <h1 id="finalScore"></h1>
            <form>
                <input hidden
                  type="text" 
                  name="username" 
                  id="username" 
                  placeholder="username"
                  value="<?php echo $name;?>"
                />
                <button 
                  type="submit" 
                  class="button" 
                  id="saveScoreButton" 
                  onclick="saveHighScore(event)"
                
                >
                  Save
                </button>
            </form>
            <a class="button" href="quizpage.html">Play Again</a>
            <a class="button" href="homepage.php">Go Home</a>
           
        </div>
    </div>
    <script src="end.js"></script>   
  </body>
</html>