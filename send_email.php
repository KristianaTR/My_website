
<?php
echo "<pre>";

print_r($_POST);
echo "</pre>";


$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){
    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];
        
        $to = "kristiana.tatarcuka@gmail.com";
        $body = "";
        
        $body .= "From: " .$userName. "\r\n";
        $body .= "Email: " .$userEmail. "\r\n";
        $body .= "Message: " .$message. "\r\n";
        
        mail($to,$messageSubject,$body);
    
        $message_sent = true;
    }
     
}

if($message_sent == true){
    echo "Thanks, your message has been sent!";
}
else{
    echo "Your email failed to send!";
}
 

/*
$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
*/

?> 
