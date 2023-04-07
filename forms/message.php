<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   if(!empty($email) && !empty($message)){
    if(filter_var($email , FILTER_VALIDATE_EMAIL)){
        $receiving_email_address = 'dhruvi2603@gmail.com';
        $subject = "FROM: $name <$email>";
        $body = "Name = $name \nEmail = $email \nSubject= $subject \nmessage = $message \n";
        $sender = "FROM: $email"; 
        if(mail($receiving_email_address, $subject, $body , $sender )){
            echo  "your message has been sent!";

        }else{
        echo  "Sorry, Failed to send the message!";
    }
}
    else{
        echo  "Enter a valid email address!";
    }
   }
   else
   {
    echo  "Email id and Message is required!";
   }

?>