<?php
     require 'config.php';
     require 'class/client.php';
     require 'session.php';

     $thisClient = new client();

     $email = $_POST['email'];
     $firstname = $_POST['fname'];
     $lastname = $_POST['lname'];
     $message = $_POST['message'];
     $propertyID = $_SESSION['prpID'];

     $myclient = $thisClient->doInquiry($propertyID,$firstname,$lastname,$email,$message);

     if($myclient > 0){
        header('Location:index.php');
     }
     else{
         return false;
     }


?>