<?php
ini_set('display_errors',1);
error_reporting( E_ALL );
$name = $_POST['name'];
$number = $_POST['number'];
$email= $_POST['email'];
$message= $_POST['message'];

// $cc = '';  
$subject = "New Inquiry From ".$name;

$headers = "From: contact@ilma.hunardesign.in" . "\r\n";
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'ilma.hunardesign.in';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'contact@ilma.hunardesign.in';                     //SMTP username
    $mail->Password   = 'bhojak11it03';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ilma@live.in', 'ILMA');
    $mail->addAddress('ilma@live.in', 'ILMA');     //Add a recipient //Name is optional
    

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = " Name : ". $name ."\r\n Number : " . $number . "\r\n Email : " . $email . "\r\n Message : " . $message  ;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo
        '<script type="text/javascript">
            confirm("Message Sent")
            history.back()
        </script>';
} catch (Exception $e) {
    //  echo
    //     '<script type="text/javascript">
    //         confirm("Error Sending mail try again later")
    //         history.back()
    //     </script>';
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}