<?php
    ini_set('display_errors',1);
    error_reporting( E_ALL );
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = "99sbhojak@gmail.com";
    // $cc = '';  
    $subject = "Mail From ".$name;
    $txt =" Name : ". $name ."\r\n Number : " . $number . "\r\n Email : " . $email . "\r\n Message : " . $message  ;
    $headers = "From: contact@ilma.hunardesign.in" . "\r\n";
    // "CC: ";
    
    
    if(mail($to,$subject,$txt,$headers)){
        echo
        '<script type="text/javascript">
            confirm("Message Sent")
            history.back()
        </script>';

    }
    
?>
