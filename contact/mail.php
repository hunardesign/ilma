<?php

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = "99sbhojak@gmail.com";
    $subject = "Mail From ".$name;
    $txt ="Name = ". $name ."\r\n Number =" . $number . "\r\n  Email = " . $email . "\r\n Message =" . $message  ;
    $headers = "From: noreply@ilma.org.in" . "\r\n" .
    "CC: ";
    
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
        echo '<script type="text/javascript">',
        'mailSent();',
        '</script>'
       ;
    }
    
?>