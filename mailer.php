<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['comment'];
   
	$to = "aashikajmal@gmail.com";
//$subject = ;
//$txt = "Hello world!";

mail($to,$subject,$message);

}
?>