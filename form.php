<?php
$name = $_POST['name'];
$visitor_email = $_POST['Email'];
$subject = $_POST['subject'];
$message = $_POST['Message'];

$email_from = 'chogalesoham@gmail.com';

$email_subject = 'New Form Submission';

$email_body ="User Name: $name.\n".
              "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
                "User Message: $Message.\n";


$to = 'chogalesoham74@gmail.com';

$headers ="From: $Email_from \r\n";

$headers .="Reply-To: $visitor_Email \r\n";



email($to,$email_subject,$email_body,$headers);

header("Location: contact.html");    


?>