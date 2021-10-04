<?php
$name=$_POST['name']
$visitor=$_POST['email']
$subject=$_POST['subject']
$message=$_POST['mesasge']

$email_form='info@cu.com';

$email_subject=' New Form Submission';

$email_body="USer Name: $name.\n".
            "USer Email: $visitor_email.\n".
            "USer Subject: $subject.\n".
            "USer Message: $message.\n";


$to ='harshitachauhan456@gmail.com';

$header="From: $email_from\r\n";

$header .="Reply-To: $visitor_email \r\n;

mail($to,$email_subject,$email_body,$headers);

header("Loaction: contact.html");

?>