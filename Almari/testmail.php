<?php
$to = "mailhostingserver@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "info@almarivoice.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>
