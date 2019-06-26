<?php
    $to = "contact@cj-itsolutions.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Form submission from: " . $name;
    $message = "The customer wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    if(!preg_match("/^\d.\w*/",$message)) {
        mail($to,$subject,$message,$headers);
    }
    header("Location: /es/#contact")
?>