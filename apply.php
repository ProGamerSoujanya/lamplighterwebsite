<?php
 $name = $_POST['name'];
 $lastname = $_POST['lastname'];
 $visitor_email = $_POST['email'];
 $age = $_POST['age'];
 $birthdate = $_POST['birthdate'];

 $email_from = 'sonali201074@gmail.com';

 $email_subject = "New Application";

 $email_body = "User Name : $name \n";
                "User Email : $email \n";
                 "Birthdate : $birthdate \n";
                   "Age : $age \n";

$to = "sonali201074@gmail.com";

$headers = "FROM : $email_from \r\n";

$headers = "Reply=To : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: apply.html")
 ?>