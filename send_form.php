<?php
    if(isset($_POST['submit'])){
    $to = "contact@cj-itsolutions.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Form Submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['comment'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Your comment has been sent. Thank you " . $name . "!";
    }
?>