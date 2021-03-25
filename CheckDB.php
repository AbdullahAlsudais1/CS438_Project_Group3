<?php include 'database.php';
session_start();?>
<?php 



//------------------------------------Register code-------------------------------------------
$problem = array(); 
  if (isset($_POST['signUp'])) { // when we receive register request

        $FName = isset($_POST[ "FName" ]) ? $_POST[ "FName" ] : "";
        $LName = isset($_POST[ "LName" ]) ? $_POST[ "LName" ] : ""; 
        $Email = isset($_POST[ "Email" ]) ? $_POST[ "Email" ] : array_push($problem, "Email is required"); 
        $Password = isset($_POST[ "Passwords" ]) ? $_POST[ "Passwords" ] : array_push($problem, "Password is required");
        $rePassword = isset($_POST[ "rePassword" ]) ? $_POST[ "rePassword" ] : "";


        if ($Password != $rePassword) {
            array_push($problem, "The two passwords is not match");
        }


        $checkDB = "SELECT * FROM player WHERE Email='$Email' LIMIT 1";
        $result = mysqli_query($conn, $checkDB);
        $checked = mysqli_fetch_assoc($result);


       if($checked){
        if ($checked['Email'] === $Email) {
             array_push($problem, "The email is already exists");
        }
    }
        


        if (count($problem) == 0) {// if we don have problem insert to DB
            $Password = md5($rePassword);

                $insert = "INSERT INTO player " . "( Fname, Lname, Email ,Passwords) " . "VALUES ( '$FName', '$LName', '$Email' , '$Password' )";


                if ( ! mysqli_query($conn ,$insert ) ) 
                {
                    print( "<p>Could not execute query!</p>" );
                    die( mysqli_connect_error());
                }
               
              // -----------------------------------know id -------------------------------

                $Id = "SELECT ID FROM player WHERE Email = '$Email' and Passwords = '$Password'";
    

                $MyId = mysqli_query($conn,$Id);
                $MyI= mysqli_fetch_array($MyId );
                foreach($MyI as $key =>$value){
                   $YourId=$value;
                }
                
                $_SESSION["ID"]=$YourId;
                $_SESSION["FName"]=$FName;
                $_SESSION["LName"]=$LName;
                $_SESSION["Email"]=$Email;
                $_SESSION["Passwords"]=$Password;
                header('location: ../homepage.php');

  }
}  



//-----------------------------------------------SignIN code--------------------------------------


    if (isset($_POST['SignIn'])) {

        $Email = isset($_POST[ "Email" ]) ? $_POST[ "Email" ] : array_push($problem, "Email is required"); 
        $Password = isset($_POST[ "Passwords" ]) ? $_POST[ "Passwords" ] : array_push($problem, "Password is required");
    
        
    
        if (count($problem) == 0) {
            $Password = md5($Password);

            $query = "SELECT * FROM player WHERE Email='$Email' AND Passwords='$Password'";

            $results = mysqli_query($conn, $query);


            if (mysqli_num_rows($results) == 1) { //check if it is exist or not
                $_SESSION['Email'] = $Email;
            



                // -----------------------------------know id -------------------------------
                $Id = "SELECT ID FROM player WHERE Email = '$Email' and Passwords = '$Password'";
        

                $ResultMyId = mysqli_query($conn,$Id);
                $MyId= mysqli_fetch_array($ResultMyId );
                foreach($MyId as $key =>$value){
                $YourId=$value;
                }
                
                $_SESSION["ID"]=$YourId;
                $searchID=$_SESSION["ID"];








                // ------------------------------------know FName-------------------------------------- 
                $FName = "SELECT Fname FROM player WHERE ID='$searchID'";
        
                $ResultMyFName = mysqli_query($conn,$FName );
                $MyFName= mysqli_fetch_array($ResultMyFName );
                foreach($MyFName as $key =>$value){
                $YourFN=$value;
                }
                

                $_SESSION["FName"]=$YourFN;




                // -----------------------------know LName--------------------------------------------
                $LName = "SELECT Lname FROM player WHERE ID='$searchID'";
        

                $ResultMyLName = mysqli_query($conn,$LName);
                $MyLName= mysqli_fetch_array($ResultMyLName );
                foreach($MyLName as $key =>$value){
                $YourLName=$value;
                }
                $_SESSION["LName"]=$YourLName;


                
                header('location: ../homepage.php');
            }
                
            else {
                array_push($problem, "Wrong in Email or password");
            }
        }
    }
