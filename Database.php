<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = "3306";
$database="web_div";



$conn = mysqli_connect($servername, $username, $password ,$database,$port,);

    if(! $conn ) {
            die('Could not connect: '. mysqli_connect_error());
    }
        



    if(!mysqli_select_db($conn,$database))
        {
            echo '<br>' . "database not selected";
    }

    
    ?>