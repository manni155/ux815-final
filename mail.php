<?php

$name = $_POST['userName'];
$email = $_POST['userEmail'];
$message = $_POST['message'];
$mailHeader = "From:".$name."<".$email.">\r\n";
$recipient = "manni155@msu.edu";
$subject = "New Form Submission";

mail($recipient, $subject, $message, $mailHeader)
or die("Error reported.");

echo"Form Submitted successfully"
?>