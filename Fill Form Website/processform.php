<?php

$name = $_POST['name'] ;

$name = $_POST['name'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$number = $_POST['number'];

$name = $_POST['name'];

$name = $_POST['name'];


$mailheader = "From:" .$name."<".$email.">\r\n";

$recipient = "mafongmarvel@gmail.com";

mail($recipient,$subject,$message,$mailheader)
or die("Error!");

echo"message sent";


?>