<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Mail php Mailer</title>
</head>
<body>
    <?php

        require_once "phpmailer/class.phpmailer.php";

        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.postmarkapp.com";
        $mail->Port = 26;
        $mail->Username = "#@#@#@#@-####-@@@@-#####-@#@#@#@#@#@#";
        $mail->Password = "#@#@#@#@-####-@@@@-#####-@#@#@#@#@#@#";

        $mail->SetFrom('name@yourdomain.com', 'Web App');
        $mail->Subject = "A Transactional Email From Web App";
        $mail->MsgHTML("Selamat Datang");
        $mail->AddAddress('wahyulucky28@gmail.com', 'test');

        if($mail->Send()) {
          echo "Message sent!";
        } else {
          echo "Mailer Error: " . $mail->ErrorInfo;
        }
    ?>
</body>
</html>