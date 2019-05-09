<?php

function u_s($email, $body, $subject) {
$subject = $subject;
// Enter Your Email Address Here To Receive Email
$email_to = $email;
 
$email_from = "admin@utglobe.com"; // Enter Sender Email
$sender_name = "UTGLOBE WEBSITE"; // Enter Sender Name
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "mail.utglobe.com"; // Enter Your Host/Mail Server
$mail->SMTPAuth = true;
$mail->Username = "admin@utglobe.com"; // Enter Sender Email
$mail->Password = "Rohit@utsav1";
//If SMTP requires TLS encryption then remove comment from below
// $mail->SMTPSecure = "tls";
$mail->Port = 25;
$mail->IsHTML(true);
$mail->From = $email_from;
$mail->FromName = $sender_name;
$mail->Sender = $email_from; // indicates ReturnPath header
$mail->AddReplyTo($email_from, "No Reply"); // indicates ReplyTo headers
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
// If you know receiver name use following
//$mail->AddAddress($email_to, "Recepient Name");
// To send CC remove comment from below
//$mail->AddCC('username@email.com', "Recepient Name");
// To send attachment remove comment from below
//$mail->AddAttachment('files/readme.txt');
/*
Please note file must be available on your
host to be attached with this email.
*/
 
$mail->send();

if ($mail) {
    return true;
} else {
    return false;
}

}
