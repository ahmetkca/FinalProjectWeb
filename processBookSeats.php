<?php

// will be processing form submission from bookSeats.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['seats']) && (isset($_POST['Adults']) || isset($_POST['Seniors']) || isset($_POST['Children']))) {
        //var_dump($_POST['seats']);
        $myfile = fopen("seats.txt", "r") or die("Unable to open file!");
        $seats_file_array = array();
        $row_num = 1;
        while(!feof($myfile)) {
            $current_line = fgets($myfile);
            $row_seats = explode(",", $current_line);
            $seats_file_array[$row_num] = $row_seats;

            $row_num+=1;
        }
        //var_dump($seats_file_array);
        foreach($_POST['seats'] as $seat) {
            $seats_file_array[$seat[1]][$seat[3]] = 1;
            //print_r($seat."<br>");
        }
        foreach ($seats_file_array as $row) {
            foreach($row as $cell) {
                print_r($cell." ");
            }
            print_r("<br>");
        }
    } else {
        echo "<h1> You must choose your seat(s) and have at least 1 ticket.</h1>";
    }
}
?>