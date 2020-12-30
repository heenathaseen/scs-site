<?php
    $to = 'orange1866@gmail.com';
    //$to = 'sathishm.mohan@gmail.com';
    $firstname = $_POST["name"];
    $email= $_POST["mobileno"];
    $mail= "support@coolroofcoating.in";
    $text= $_POST["message"];
    $area= $_POST["area"];
    $subject= $_POST["subject"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $mail . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr><td>Name   : '.$firstname.'</td></tr>
        <tr><td>Mobile : '.$email.'</td></tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Area   : '.$area.'</td></tr>
        <tr><td>Text   : '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
