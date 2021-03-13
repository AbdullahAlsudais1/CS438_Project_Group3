<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = "3325";
$database="test2";


$conn = mysqli_connect($servername, $username, $password ,$database,$port,);

    if(! $conn ) {
            die('Could not connect: '. mysqli_connect_error());
    }
        



    if(!mysqli_select_db($conn,"test2"))
        {
            echo '<br>' . "database not selected";
    }

    
    ?>