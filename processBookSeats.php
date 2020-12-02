<?php

// will be processing form submission from bookSeats.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['seats']) && (isset($_POST['Adults']) || isset($_POST['Seniors']) || isset($_POST['Children']))) {
        $myfile = fopen("seats.txt", "r") or die("Unable to open file!");
        $seats_file_array = array();
        $row_num = 0;
        print_r($_POST['totalSubmission']);

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
            //$seats_file_array[$row_num] = $row_seats;

            $row_num+=1;
        }
        

        //Updates the array with selected seats
        foreach($_POST['seats'] as $seat) {
            if ($seat == "occupied" || $seat == "covid") {
                continue;
            }
            $seats_file_array[intval($seat[1])-1][intval($seat[3])-1] = 1;
        }


        //This is to rewrite the file in order to save the selections for next time
        
        $writeToFile = fopen("seats.txt", "w"); //w is a type of write that truncates the file and writes on a fresh txt
                                                //this is because we can't target a specific file element, we need to iterate through
        $nRow = 1;
        foreach($seats_file_array as $row) {
            $line = "";
            $nCol = 1;
            foreach($row as $cell) {
                //$line =$line.$cell.",";
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

        
    } else {
        echo "<h1> You must choose your seat(s) and have at least 1 ticket.</h1>";
    }
}
?>