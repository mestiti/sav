<?php
$to = 'wdev9108@gmail.com';
$subject = 'hi';
$message = 'how are you';
$headers = 'from: wdev9108@gmail.com';
if(mail($to, $subject, $message, $headers))
     echo("success");
     else echo("failure");
     ?>