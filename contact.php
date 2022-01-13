<!DOCTYPE html>
 
<?php 
include('head.php');
$subpage_name = 'contact';
include('navigation.php'); 
//include('send_email.php');

?>

<main>
     
       <div class="contact_main_container">
        <h1 class="contact_header">Contact me.</h1>
        <p class="contact_text">Send me a message, I will be in touch with you shortly.</p>
       <div class="contact_form">
            <form action="contact.php" method="post">

               <div class="form_group">
                    <input type="text" class="form-control" name="name" placeholder="Name">
               </div>
               <div class="form_group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
               </div>
               <div class="form_group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
               </div>
               <div class="form_group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="Message"></textarea>
               </div>

               <div>
                    <button type="submit" class="btn">Send</button>   
               </div>

            </form>
              
           </div>
          
       </div>
        
    </div>
 
</main>

<script>script.js</script>

