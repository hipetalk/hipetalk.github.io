<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // access
        $secretKey = '6LcAFOwUAAAAAKrALOZVGsaP9Z76113YB71b_WI5';
        $captcha = $_POST['g-recaptcha-response'];

        if(!$captcha){
          echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
          exit;
        }

        # FIX: Replace this email with recipient email
        $mail_to = "goto@hts-li.co.jp";
        
        # Sender Data
        $subject = trim($_POST["subject"]);
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
        
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($subject) OR empty($message)) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo '<p class="alert alert-warning">Please complete the form and try again.</p>';
            exit;
        }

        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);

        if(intval($responseKeys["success"]) !== 1) {
          echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
        } else {
            # Mail Content
            $content = "Name: $name\n";
            $content .= "Email: $email\n\n";
            $content .= "Message:\n$message\n";

            # email headers.
            $headers = "From: $name <$email>";

            # Send the email.
            $success = mail($mail_to, $subject, $content, $headers);
            if ($success) {
                # Set a 200 (okay) response code.
                http_response_code(200);
                echo "<script>alert('Email sent!');window.location='index.html'</script>";
            } else {
                # Set a 500 (internal server error) response code.
                http_response_code(500);

                echo "<script>alert('Oops! Something went wrong, we couldnt send your message.');window.location='index.html'</script>";
            }
        }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);

        echo "<script>alert('There was a problem with your submission, please try again.');window.location='index.html'</script>";
    
    }

?>
