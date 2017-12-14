<?php
$to ='25030@ma-web.nl';
$subject =$_POST['subject'];
$message =$_POST['message'];
$headers ='From : '.$_POST['from'];

//mail versturen
mail($to, $subject, $message, $headers);

echo 'Uw maail is verstuurd. Bedankt!';
