<?php
    ////
    // session start - to display flash messages
    session_start();

    // display errors - can be removed when testing is done
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ////

    // if (count($_POST) > 0) {
    if ($_POST) {
        // may want to add captcha

        // initialize variables
        $name = "";
        $email = "";
        $message = "";
        $email_body = "<div>";
        $fakemail = "";

        // form variables
        if(isset($_POST['name'])) {
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $email_body .= "<div>
                                <label><b>Visitor Name:</b></label>&nbsp;<span>".$name."</span>
                            </div>";
        }        
        if (isset($_POST['email'])) {
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $email_body .= "<div>
                                <label><b>Visitor Email:</b></label>&nbsp;<span>".$email."</span>
                            </div>";
        }
        if (isset($_POST['message'])) {
            $message = $_POST['message'];
            $email_body .= "<div>
                                <label><b>Visitor Message:</b></label>
                                <div>".$message."</div>
                            </div>";
        }
        $fakemail = $_POST['_email'];

        // mail build
        // $recipient = "horvath.j17@gmail.com"; // replace
        // $title = "Message From: $name";
        // $message_body = "Message: $message";
        // $mail_header = "From: $email \r\n";
        // $titles = 'From: contactform@jakob-17.github.io' . "\r\n" . 
        //     "Reply-To: " . $email . "\r\n" . 
        //     'X-Mailer: PHP/' . phpversion();

        $email_body .= "</div>";

        $email_fill = "jakob@quizzical-swanson-0f612c.netlify.app"

        $headers = 'MIME-Version: 1.0' . "\r\n"
            .'Content-type: text/html; charset=utf-8' . "\r\n"
            .'From: ' . $email_fill . "\r\n";

        $headers .= "Reply-To: $email";

        $email_title = "Testing";

        $recipient = "jakob_horvath@hotmail.com";

        // honeypot check
        if ($fakemail == "") {
            if (mail($recipient, $email_title, $email_body, $headers)) {
                echo("<p>Thank you for contacting us, $name. You will get a reply within 24 hours.</p>");
            }
            else {
                echo "<p>We are sorry but the email did not go through.</p>";
            }
        }
        else {
            $_SESSION['mail_status'] = FALSE;
            $_SESSION['flash'] = "Your message was not sent, we think you are a bot!";
        }
    }
    else {
        echo "<p>Something went wrong</p>";
    }
?>