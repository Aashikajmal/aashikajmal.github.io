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

mail($to,$subject,$message);

}
?>
