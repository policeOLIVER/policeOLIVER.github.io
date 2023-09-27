<?php
$nam = $_POST['name'];
$visitor_email = $_POST['email'];
$flavors = $_POST['flavor'];
$message = $_POST['message'];

$email_from = 'pontillohazel416@gmail.com';

$email_flavor = 'New Order';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Flavor: $flavor.\n".
                "User Message: $visitor_email.\n";


 $to = 'hazelpontillo44@gmail.com';
 
 $headers = "From: $email_from \r\n";

 $headers .= "Reply-To: $visitor_email \r\n";


 mail($to,$email_subject,$email_body,$headers);

 header("location: contact.html");

                

?>