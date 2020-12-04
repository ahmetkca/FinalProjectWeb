<?php

// will be processing form submission from bookSeats.php

    session_start();
    //used to store reciept info in database
        include ("setup.php");
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //Notifies user if there was an error connecting to the database
        if (mysqli_connect_errno()) {
            die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
        }




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['seats']) && (isset($_POST['Adults']) || isset($_POST['Seniors']) || isset($_POST['Children'])) ) {
        if (!($_POST['Adults'] == '0' && $_POST['Seniors'] == '0' && $_POST['Children'] == '0')) {
            $myfile = fopen("seats.txt", "r") or die("Unable to open file!");
            $seats_file_array = array();
            $row_num = 0;
            $total = $_POST['totalSubmission'];
            $seats = $_POST['seats'];
            

            //Reads the file to initialise a 2D array (similar bookseats.php), used to target a seat directly by row and column
            //opposed to iterating through
            while(!feof($myfile)) {
                $current_line = fgets($myfile);
                $current_line = str_replace(array("\n", "\r"), '', $current_line);
                $row_seats = explode(",", $current_line);
                $seats_file_array[$row_num] = array();
                for ($a = 0; $a < count($row_seats); $a+=1) { 
                    
                    $seats_file_array[$row_num][$a] = intval($row_seats[$a]);
                }
                

                $row_num+=1;
            }
            

            //Updates the array with selected seats
            foreach($_POST['seats'] as $seat) {
                if ($seat == "occupied" || $seat == "covid") {
                    continue;
                }
                $seats_file_array[intval($seat[1])-1][intval($seat[3])-1] = 1;
            }

            // creates a brand new array with only selected seats
            // excluding the occupied ones.
            $newSeatsNum = array();
            foreach($_POST['seats'] as $seat) {
                if ($seat == "occupied" || $seat == "covid") {
                    continue;
                }
                array_push($newSeatsNum, $seat);
            }


            //This is to rewrite the file in order to save the selections for next time
            
            $writeToFile = fopen("seats.txt", "w"); //w is a type of write that truncates the file and writes on a fresh txt
                                                    //this is because we can't target a specific file element, we need to iterate through
            $nRow = 1;
            foreach($seats_file_array as $row) {
                $line = "";
                $nCol = 1;
                foreach($row as $cell) {
                    
                    if ($nCol < 9) {
                        $line =$line.$cell.",";
                    } else {
                        $line =$line.$cell;
                    }
                    $nCol+=1;
                    
                    
                }
                if ($nRow < 5) {
                    $line = $line."\n";
                }
                
                fwrite($writeToFile, $line);
                $nRow+=1;
            }
            fclose($writeToFile);

            // query string for receipt modal.
            // holds receipt information.
            $rStr = "location: bookSeats.php?total=".$total;
            foreach($_POST['seats'] as $seat) {
                if ($seat == "occupied" || $seat == "covid") {
                    continue;
                }
                $rStr .= "&seats[]=".$seat;
            }
            $rStr .= "&adult=".$_POST['adultSubmission'];
            $rStr .= "&senior=".$_POST['seniorSubmission'];
            $rStr .= "&children=".$_POST['childrenSubmission'];
            
            $rStr .= "&popcorn=".$_POST['popcornSubmission'];
            $rStr .= "&coke=".$_POST['cokeSubmission'];
            $rStr .= "&candy=".$_POST['candySubmission'];
            $rStr .= "&nacho=".$_POST['nachoSubmission'];

            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                $user = $_SESSION['username'];
                $adults = $_POST['adultSubmission'];
                $seniors = $_POST['seniorSubmission'];
                $children = $_POST['childrenSubmission'];
                $popcorn = $_POST['popcornSubmission'];
                $coke = $_POST['cokeSubmission'];
                $candy = $_POST['candySubmission'];
                $nachos = $_POST['nachoSubmission'];
                $sum = $_POST['totalSubmission'];

                //Holds the necessary command to insert into the 'users' table
                $sqlhold = "INSERT INTO booked (Username, AdultNum, SeniorNum, ChildrenNum, PopcornNum, CokeNum, CandyNum, NachoNum, totalNum, seatsNum) VALUES (
                    '{$connection->real_escape_string($user)}',
                    '{$connection->real_escape_string($adults)}',
                    '{$connection->real_escape_string($seniors)}',
                    '{$connection->real_escape_string($children)}',
                    '{$connection->real_escape_string($popcorn)}',
                    '{$connection->real_escape_string($coke)}',
                    '{$connection->real_escape_string($candy)}',
                    '{$connection->real_escape_string($nachos)}',
                    '{$connection->real_escape_string($sum)}',
                    '{$connection->real_escape_string(implode(",", $newSeatsNum))}')";

                //Inserts the command ($mysqlhold) into the mySQL console
                $insert = mysqli_query($connection, $sqlhold);
                
                //Returns statement based on whether the insert was completed successfully
                if($insert == true){
                    echo '<script>alert("You Have Signed Up Successfully")</script>';
                }
                else{
                    echo '<script>alert("Sign Up NOT Successful")</script>';
                }

            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
            // redirects user to bookSeats.php with receipt information such as seats selected, number of popcorn, type of ticket.
            header($rStr);
        } else {
            // redirects user to bookSeats.php with appropriate error message.
            header("location: bookSeats.php?error=You must choose your seat(s) and have at least 1 ticket.");
        }
    } else {
        // redirects user to bookSeats.php with appropriate error message.
        header("location: bookSeats.php?error=You must choose your seat(s) and have at least 1 ticket.");
    }
}
?>