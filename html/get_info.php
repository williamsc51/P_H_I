<?php

$email = "williams.a.courtney@gmail.com";
$subject = "Test";
$from = "noreply@mine.com";
$header = "From" .$from;
$firstn = $_POST["fname"];
$lastn = $_POST["lname"];

mail($email, $subject, $firstn, $header);


print "Thank you for submitting";
?>
