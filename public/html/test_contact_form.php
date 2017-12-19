<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once('../../vendor/autoload.php');

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'williams.a.courtney@gmail.com';          // SMTP username
$mail->Password = 'Bruce_Ashley2016'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('williams.a.courtney@gmail.com', 'Contractor');
$mail->addReplyTo('info@phi.com', 'Professional Home Improvement');
$mail->addAddress('williams.a.courtney@gmail.com');   // Add a recipient
$mail->addCC('');
$mail->addBCC('');

$mail->isHTML(true);  // Set email format to HTML

$firstn = $_POST["fname"];
$lastn = $_POST["lname"];
$contact_email = $_POST["fname"];
$contact_phone = $_POST["email"];
$start_date = $_POST["date"];
$service_request = $_POST["service"];
$desc = $_POST["description"];


$message = "Name: " .$firstn ." ";
$message .= $lastn ."<br />";
$message .= "Email: " .$contact_email ."<br />";
$message .= "Phone: " .$contact_phone ."<br />";
$message .= "Desired Start Date: " .$start_date ."<br />";
$message .= "Service Request: " .$service_request ."<br />";
$message .= "Detail: " .$desc;

$mail->Subject = 'Service Request';
$mail->Body    = $message;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
