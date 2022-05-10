<?php
//print_r ($_POST) ;
$email = $_POST ['email'] ;
$message = $_POST ['message'] ;


$error = '';
if (trim($email) == '') 
    $error = 'Enter your email';
else if (trim($message) == '') 
    $error = 'Enter your message';
if ($error != '')
 {
     echo $error;
     exit;
 }
 $mes = "Name: $name \nE-mail: $email \nThema: $header \nText: $message";
 $send = mail($email, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
 if ($send == 'true') {echo "Your message is sent";}
 else {echo "Oops, is something went wrong";}
//<----Another form--->//
/*$subject="=?utf-8?B?".based_encode("Test message")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset="UTF-8\r\n";*/


 mail('hikko274@gmail.com', $subject, $message, $headers);

 header('Location:about.php')

?>
