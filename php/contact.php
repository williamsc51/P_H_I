<?php

$email_to = "williams.a.courtney@gmail.com";
$subject = "Test";
$from = "noreply@mine.com";
$header = "From" .$from;
$firstn = $_POST["fname"];
$lastn = $_POST["lname"];
$contact = $_POST["contact"];
$email = $_POST["email"];

$message = $firstn;
$message .= $lastn;
$message .= $contact;
$message .= $email;

mail($email_to, $subject, $header, $message);


print "Thank you for you submission. We look forward to speaking with you soon";

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>
 </body>
</html>

?>
