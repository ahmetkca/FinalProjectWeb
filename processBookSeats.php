<?php

// will be processing form submission from bookSeats.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['seats']) && (isset($_POST['Adults']) || isset($_POST['Seniors']) || isset($_POST['Children']))) {
        //var_dump($_POST['seats']);
        $myfile = fopen("seats.txt", "r") or die("Unable to open file!");
        $seats_file_array = array();
        $row_num = 0;

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
        //var_dump($seats_file_array);
        foreach($_POST['seats'] as $seat) {
            //var_dump(intval($seat[1]));
            $seats_file_array[intval($seat[1])-1][intval($seat[3])-1] = 1;
            //print_r($seat."<br>");
        }
        foreach ($seats_file_array as $row) {
            //var_dump($seats_file_array);
            foreach($row as $cell) {
                //print_r($cell.",");
            }
            //print_r("<br>");
        }

        $writeToFile = fopen("seats.txt", "w");
        $nRow = 1;
        foreach($seats_file_array as $row) {
            $line = "";
            $nCol = 1;
            foreach($row as $cell) {
                //var_dump($cell);
                
                //print_r($cell.",");
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
            
            //print_r('\n');
            //print_r($line."\n");
            fwrite($writeToFile, $line);
            $nRow+=1;
        }
        fclose($writeToFile);

        
    } else {
        echo "<h1> You must choose your seat(s) and have at least 1 ticket.</h1>";
    }
}
?>