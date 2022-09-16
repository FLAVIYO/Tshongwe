<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$massege = $_POST['massege'];


$mailheader = "From".$name."<".$email.">\r\n";
$reciepient = "shongwe1408@gmail.com";

mail($reciepient,$subject,$massege,$mailheader)
or die("error");

echo"Massege Sent";

?>