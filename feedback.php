<?php
     require 'class/client.php';
     require 'config.php';
     require 'session.php';  

     $clients = new client();

     $emailAddy = $_SESSION['id'];
     $feedback = $_POST['message'];

     $sendFeedback = $clients->addUserFeedBack($emailAddy,$feedback);

     if($sendFeedback > 0){
        $url='index.php';
        header("Location: $url");
     }
     else{
         return false;
     }
?>