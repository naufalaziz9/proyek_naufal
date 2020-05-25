<?php
include "classes/class.phpmailer.php";
$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "smtp.gmail.com"; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "bevankevin0@gmail.com"; //user email
$mail->Password = "bkbfpiekvhljkevv"; //password email 
$mail->SetFrom("bevankevin0@gmail.com","Nama pengirim"); //set email pengirim
$mail->Subject = "Testing"; //subyek email
$mail->AddAddress("bchristian01@student.ciputra.ac.id","bevan");  //tujuan email
$mail->MsgHTML("Testing...");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";
?>