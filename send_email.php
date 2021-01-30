<?php
    if (!empty($_POST["send"])) {
        $name = $_POST["userName"];
        $email = $_POST["userEmail"];
        $subject = $_POST["userSubject"];
        $message = $_POST["userMessage"];

        $toEmail = "jakob_horvath@hotmail.com";
        $headers = "From: " . $name . "<" . $email . ">\r\n";
        if (mail($toEmail, $subject, $message, $headers)) {
            $replyMessage = "Thank you. We will get back to you within 24 hours.";
            $type = "success";
        }
    }
?>