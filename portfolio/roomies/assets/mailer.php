<?php

$to = "7343583180@txt.att.net";
$subject = "Chore notification.";
$from = "From: Roomies <roomiesmanagement@gmail.com>";
$text = "Your day for sweeping.";

mail($to, $subject, $text, $from);




/*// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    //$mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'roomiesmanagement@gmail.com';                 // SMTP username
    $mail->Password = 'FizGlo@!23';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );
    
AllTel        number@text.wireless.alltel.com
AT&T            number@txt.att.net
Boost Mobile    number@myboostmobile.com
Cricket         number@sms.mycricket.com
Sprint          number@messaging.sprintpcs.com
T-Mobile        number@tmomail.net
US Cellular     number@email.uscc.net
Verizon         number@vtext.com
Virgin Mobile	number@vmobl.com
    
    //Recipients
    $mail->setFrom('roomiesmanagement@gmail.com', 'Roomies');
    $mail->addAddress('7343583180@txt.att.net', 'Z B');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Chore Notification';
    $mail->Body    = 'Today is your day for Sweeping.</b>';
    $mail->AltBody = 'Today is your day for Sweeping.';

    $mail->send();
    //echo 'Message has been sent';
    
    
    
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}*/

?>