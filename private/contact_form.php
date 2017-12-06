<?php

$email_to = "williams.a.courtney@gmail.com";
$subject = "Service";
$from = "donotreply@professionalhi.com";
$header = "From: " .$from;
$firstn = $_POST["fname"];
$lastn = $_POST["lname"];
$contact_phone = $_POST["contact"];
$contact_email = $_POST["email"];
$start_date = $_POST["date"];
// $service_request = $_POST["service"];
$desc = $_POST["description"];


$message = "Name: " .$firstn ." ";
$message .= $lastn ."\n";
$message .= "Email: " .$contact_email;
$message .= " / Phone: " .$contact_phone ."\n";
$message .= "Desired Start Date: " .$start_date ."\n";
//$message .= "Service Request: " .$service_request ."\n";
$message .= "Detail: " .$desc;

mail($email_to, $subject, $header, $message);

print($message);
?>

<html>
<head>
<title>Contact</title>
</head>
<body>
  <p>
    Thank you for your submission. Your infomration has been forwarded to a mameber of your team who will reach out to you shortly to gather more infomration or answer any question you may have at this time.<br />
    We look forward to speaking and  with you soon
  </p>
</body>
</html>
