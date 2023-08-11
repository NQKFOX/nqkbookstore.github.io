<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


$email_from = 'info@nqkfox.online';

$email_subject = 'New Form Submission';

$emaii_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                        "User Message: $message.\n".




    $to = 'nqkfoxswipe0@gmail.com';

    $headers = "From: $email_from \r\n";

    $headers .= "Reply to: $visitor_email \r\n";


    mail($to,$email_subject,$emaii_body,$headers);

    header("Location: cunny.html");

    ?>