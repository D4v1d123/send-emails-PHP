<?php 
if (isset($_POST["send"])) {
    if (isset($_POST["recipient"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
        $recipien = $_POST["recipient"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $header = "From: noreply@example.com" . "\r\n";
        $header .= "Reply-To: noreply@example.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();

        // mail => This function allow you to sent mail from web server through the sendmail program.
        $mail = mail($recipien, $subject, $message, $header);

        // Check if the mail has been sent.
        if ($mail) {
            echo "<p>The message has been sent.</p>";
        }
    }
}