<?php 
  include 'CheckDB.php';
?><?php include 'problem.php'; ?>
<!DOCTYPE html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="quizpage.css">
  </head>
  <body>
        <center>

        <div class="register">  

        <h3>Register</h3>

        <form action="Register.php" method="post">



            <label for="fname">First name:</label>

            <input type="text" id="FName" name="FName" placeholder="First Name" style="width: 210px;"  autofocus required><br><br>



            <label for="name">Last name:</label>

            <input type="text" id="LName" name="LName" placeholder="Last Name" style="width: 210px;"  required><br><br>

                



            <label for="Email">Email:</label>

                <input type="email" id="Email" name="Email" placeholder="abcd@gmail.com" style="width: 210px;" required><br><br>



            <label for="Password">Password:</label>

                <input type="password" id="Passwords" name="Passwords" placeholder="xxxxxxxxxxxx" style="width: 210px;" required pattern="[A-Z a-z 0-9]{8,}"><br><br>



            <label for="rePassword"> Confirm Password:</label>

                <input type="password" id="rePassword" name="rePassword" placeholder="xxxxxxxxxxxx" style="width: 210px;" required pattern="[A-Z a-z 0-9]{8,}"><br><br>



             <button type="submit" class="button1" name="signUp">Sign up</button>

        



        </form>

     </div>

     </center>



  </body>
</html>
<!-- This is a test for pushing/pulling and commiting changes --> 