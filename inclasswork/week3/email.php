<?php 
$To = 'aparys001@gmail.com'; 
$Subject = 'php send mail'; 
$Message = 'This example demonstrates how you can send plain text email with PHP'; 
$Headers = "From: sinkidonk@gmail.com \r\n" . 
"Reply-To: alexparys@wi.rr.com \r\n" . 
"Content-type: text/html; charset=UTF-8 \r\n"; 
  
mail($To, $Subject, $Message, $Headers); 
?>