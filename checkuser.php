<?php

    include ("setup.php");
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Notifies user if there was an error connecting to the database
    if (mysqli_connect_errno()) {
        die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];

        //This writes to mySQL console
        //it selects everything from the users tables, and checks for the '$user' variable
        $sqltask = "select * from users where Username = '$user'";
        $sqltype = mysqli_query($connection, $sqltask);

        //Check if that '$user' already exists within the table
        $check = mysqli_num_rows($sqltype);

        if($check >= 1){
            echo '<script>alert("This Username Already Exists")</script>';
            echo '<a href="signup.html" class="echotext"><center>Click Here to Attempt to Sign Up Again</center><a>';
        }
        else{

            //Holds the necessary command to insert into the 'users' table
            $sqlhold = "INSERT INTO users (FirstName, LastName, Username, Password, EmailAddress) VALUES (
                '{$connection->real_escape_string($fname)}',
                '{$connection->real_escape_string($lname)}',
                '{$connection->real_escape_string($user)}',
                '{$connection->real_escape_string($pass)}',
                '{$connection->real_escape_string($email)}')";

            //Inserts the command ($mysqlhold) into the mySQL console
            $insert = mysqli_query($connection, $sqlhold);
            
            //Returns statement based on whether the insert was completed successfully
            if($insert == true){
                echo '<script>alert("You Have Signed Up Successfully")</script>';
                echo '<a href="login.html" class="echotext"><center>Click Here to Login</center><a>'; 
                //Gives user a link to login after signing up
            }
            else{
                echo '<script>alert("Sign Up NOT Successful")</script>';
                echo '<a href="signup.html" class="echotext"><center>Click Here to Attempt to Sign Up Again</center><a>';
            }
        
        }
        
       
    }
    else{
        echo "You did not access this using signup.html";
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