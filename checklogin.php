<?php
session_start();
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
            
            $_SESSION['username'] = $infoarray["Username"];
            $_SESSION['userID'] = $infoarray["Id"];
            $_SESSION['fname'] = $infoarray['FirstName'];
            $_SESSION['lname'] = $infoarray['LastName'];
            $_SESSION['email'] = $infoarray['EmailAddress'];
            sleep(1);
            header("location: home.php");

        }
        else{

            //outputs message if user doesn't exist
            echo '<script>alert("This User Does Not Exist \n OR \n The Username or Password is Incorrect")</script>';
            echo '<a href="login.html" class="echotext"><center>Click Here to Attempt to Log in Again</center><a>';

        }
    }
else{
    echo "You did not access this using login.html";
}

?>

<!DOCTYPE html>
	<html>
        <head>

            <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

            <style>
                .rotate180 {
                    -webkit-transform: rotate(180deg);
                    -moz-transform: rotate(180deg);
                    -o-transform: rotate(180deg);
                    -ms-transform: rotate(180deg);
                    transform: rotate(180deg);
                }
                .echotext{
                    font-size: 50pt; 
                    color: orange; 
                    font-family: Arial;
                    transition: 0.5s;
                    font-family: 'Oswald', sans-serif;
                }
                .echotext:hover{
                    color: rgb(81, 185, 255);  
                }
            </style>

        <head>

        <body style="background-image: url('images/starnight.jpg');">

            <img src="images/stars.png" class="rotate180" style="width: 100%; z-index: 0; margin-left: 0; margin-right: 0;">

        </body>
    </html>