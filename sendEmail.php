<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Mail php Mailer</title>
</head>
<body>
    <?php

        require 'PHPMailer/PHPMailerAutoload.php';

        $mail             = new PHPMailer();

        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host       = "smtp.gmail.com"; // SMTP server
        $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                                   // 1 = errors and messages
                                                   // 2 = messages only
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "tls";
        $mail->Host       = "smtp.gmail.com";      // SMTP server
        $mail->Port       = 587;                   // SMTP port
        $mail->Username   = "wahyulucky28@gmail.com";  // username
        $mail->Password   = "absenduadelapan";            // password

        $mail->SetFrom('user@gmail.com', 'Test');

        $mail->Subject    = "I hope this works!";

        $mail->MsgHTML('Blah');

        $address = "wahyulucky28@gmail.com";
        $mail->AddAddress($address, "Test");

        if(!$mail->Send()) {
          echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
          echo "Message sent!";
        }

    ?>
</body>
</html>