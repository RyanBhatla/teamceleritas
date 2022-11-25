<?php
    $name = $_POST['name'];
    $visitor_email = $POST['email'];
    $message = $_POST['message'];

    $email_from = 'ryan.bhatla@gmail.com';
    $email_subject = "new website form submission";
    $email_body = "User name : $name.\n".
                    "User email : $visitor_email.\n".
                        "User message : $message.\n";
    
    $to = "gagsbhatla@gmail.com";
    $headers = "From : $email_from \r\n";
    $headers .= "Reply-to : $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>