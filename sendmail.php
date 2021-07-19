<?php
    $to_email = "1dt18is075.s.nithin@gmail.com";
    $subject = "Test";
    $body = "Hi, this is nithin";
    $headers = "From: 1dt18is117.yashjoshi@gmail.com";

    $em = mail($to_email, $subject, $body, $headers);
    if($em){
        echo "Email successfully sent to $to_email";
    }
    else{
        echo "Email sending failed";
    }
?>