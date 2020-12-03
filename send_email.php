<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['msg'])) {
        $to = $_SESSION['email'];
        $subject = "[OTFilms] Thank you for your purchase.";

        $message = $_POST['msg'];

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <akarapinrar@gmail.com>' . "\r\n";
        //$headers .= 'Cc: myboss@example.com' . "\r\n";
        mail($to,$subject,$message,$headers);
    }
}

?>