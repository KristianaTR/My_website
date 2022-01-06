<!DOCTYPE html>
 
<?php 
include('head.php');
$subpage_name = 'contact';
include('navigation.php'); 
?>

<main>
    <div class="contact_main_container">
        <h1 class="contact_header">Contact me.</h1>
        <p class="contact_text">Send me a message, I will be in touch with you shortly.</p>
       
        
    </div>

</main>

<?php
$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

