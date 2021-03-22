<?php include 'CheckDB.php';?>
<?php include 'problem.php'; ?>

<!DOCTYPE html>

  <head>
    <title>Quiz</title>
    <link rel="stylesheet" href="SignIN.css">

  </head>
  <body>
    

            <center>
                <div class="register">  
                 <h3>Sign in</h3>

                    <form action="signIN.php" method="post">


                        <label for="Email">Email:</label>
                            <input type="email" id="Email" name="Email" placeholder="ABC@domin.com" style="width: 210px;" required><br><br>


                        <label for="lname">Password:</label>
                            <input type="password" id="Passwords" name="Passwords" placeholder="******" style="width: 210px;" required><br><br>



                        <button type="submit" class="button1" name="SignIn">Sign in</button>



                        <a href="Register.php"><button type="button" class="button1">Register</button></a>


                    </form>



                </div>



            </center>

  </body>
</html>
<!-- This is a test for pushing/pulling and commiting changes --> 