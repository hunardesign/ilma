<?php

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = "99sbhojak@gmail.com";
    // $cc = '';  
    $subject = "Mail From ".$name;
    $txt =" Name : ". $name ."\r\n Number : " . $number . "\r\n Email : " . $email . "\r\n Message : " . $message  ;
    $headers = "From: contact@hunardesignstudios.in
    " . "\r\n";
    // "CC: ";
    
    
    if(mail($to,$subject,$txt,$headers)){
        echo
        '<script type="text/javascript">
            confirm("Message Sent")
            history.back()
        </script>';

    }
    
?>
