<?php
    $to = "contact@cj-itsolutions.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Form submission from: " . $name;
    $message = "The customer wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header("Location: /#contact")
?>