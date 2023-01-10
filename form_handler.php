<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$surburb = $_POST['surburb'];
$address = $_POST['address'];
$service = $_POST['service'];
$job_details = $_POST['job_details'];
$date = $_POST['date'];
//$pictures = $_POST['pictures'];

$email_from ='optimalhandyservices@gmail.com';/* Use Website Domain Name */

$email_subject = 'New Quote Request';

$email_body = "User Name: $name.\n."
              "User Email: $email.\n."
              "User Phone Number: $number.\n."
              "User Surburb: $surburb.\n."
              "User Address: $address.\n."
              "Service Required: $service.\n."
              "Job Details: $job_details.\n."
              "date: $date.\n.";
             // "Pictures: $pictures.\n."
$to = 'optimalhandyservices@gmail.com'; 
$headers = "From: $email_from \r\n";

$headers .="Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: getquote.html");
?>