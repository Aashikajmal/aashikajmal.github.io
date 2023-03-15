<?php

if(isset($_GET['submit']))
{
    $name = $_GET['name'];
    $email = $_GET['email'];
    $subject = $_GET['subject'];
    $message = $_GET['comment'];
   
	$to = "aashikajmal@gmail.com";
//$subject = ;
//$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: aashikajmal@gmail.com";
mail($to,$subject,$message,$headers);

}
?>
