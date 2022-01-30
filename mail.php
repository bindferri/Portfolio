<?php
//get data from form
$name = $_POST['contact_name'];
$email= $_POST['contact_email'];
$subject= $_POST['contact_subject'];
$message= $_POST['contact_message'];
$to = "bindferri@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
    "CC: somebodyelse@example.com";
if($email!=NULL){

    // sending email
    mail($to,$subject,$txt,$headers);
}
?>