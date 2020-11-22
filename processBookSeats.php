<?php

// will be processing form submission from bookSeats.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['seats']) && (isset($_POST['Adults']) || isset($_POST['Seniors']) || isset($_POST['Children']))) {
        var_dump($_POST['seats']);
    } else {
        echo "<h1> You must choose your seat(s) and have at least 1 ticket.</h1>";
    }
}
?>