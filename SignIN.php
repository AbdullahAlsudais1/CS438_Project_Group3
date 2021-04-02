<?php include 'CheckDB.php';?>
<?php include 'problem.php'; ?>

<!DOCTYPE html>

  <head>
    <title>Quiz</title>
    <!-- <link rel="stylesheet" href="SignIN.css"> -->
    <link rel="stylesheet" href="homepage.css">

  </head>
  <body>
    

            <center>
                <div class="container">
                 <div class="flex-center flex-column">
                  <h2>Sign in</h2>

                    <form action="signIN.php" method="post">


                        <label for="Email">Email:</label>
                            <input type="email" id="Email" name="Email" placeholder="ABC@domin.com" style="width: 210px;" required><br><br>


                        <label for="lname">Password:</label>
                            <input type="password" id="Passwords" name="Passwords" placeholder="******" style="width: 210px;" required><br><br>



                        <button type="submit" class="button" name="SignIn">Sign in</button>



                        <a href="Register.php"><button type="button" class="button">Register</button></a>


                    </form>


                 </div>
                </div>



            </center>

  </body>
</html>
<!-- This is a test for pushing/pulling and commiting changes --> 