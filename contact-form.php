<?php
    $visitor_email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    $email_from = 'vyanan918@gmail.com';
    $email_subject = "New Form Submission"
    $email_body = "$name at $visitor_email contacted you through your portfolio! \n".
        "Message: $message\n";

    $to = "vyanan918@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $headers);
    header("Location: index.html")
?>