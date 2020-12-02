<?php

include ("setup.php");
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Notifies user if there was an error connecting to the database
if (mysqli_connect_errno()) {
    die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    //This writes to mySQL console
        //it selects everything from the users tables, and checks for the '$user' variable
        $sqltask = "select * from users where Username = '$user' AND Password ='$pass'";
        $sqltype = mysqli_query($connection, $sqltask);

        //Check if that '$user' already exists within the table
        $check = mysqli_num_rows($sqltype);

        if($check == 1){
            
            //Contains info about the user
            $infoarray = mysqli_fetch_array($sqltype, MYSQLI_ASSOC);
            
            //Outputs some info about the user
            echo '<center>Welcome ' . $infoarray["FirstName"] . " " . $infoarray["LastName"] . '<center>';
            echo "<br>";
            echo "Your email is " . $infoarray["EmailAddress"];

        }
        else{

            //outputs message if user doesn't exist
            echo '<script>alert("This User Does Not Exist \n OR \n The Username or Password is Incorrect")</script>';
            echo '<a href="login.html" style="font-size: 50pt; color: green; font-family: Arial;"><center>Click Here to Attempt to Log in Again</center><a>';

        }
    }
else{
    echo "You did not access this using login.html";
}

?>