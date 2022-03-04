<?php 
    require 'config.php';
    require 'class/client.php';
    require 'session.php';

    try {
      
        $PostID = $_POST['email'];
        


        $client = new client();
        
        $data = $client->newsletterSubscription($PostID);

    
    } catch (PDOException $th) {
        echo 'There Was an Error : '. $th->getMessage();
    }
?>