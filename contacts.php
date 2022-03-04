<?php
        require 'config.php';
        require 'class/client.php';

        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $contactMessage = $_POST['message'];

        $newclient = new client();

        $runQuery = $newclient->addContactUsMessage($firstname,$lastname,$email,$subject,$contactMessage);

        if($runQuery > 0)
        {
            echo '<script>window.alert("Your message has been sent successfully");</script>';
            $url='index.php';
            header("Location: $url"); // Page redirecting to home.php
        }
        else{
            echo "There was an Error, couldn't send your message";
        }
?>