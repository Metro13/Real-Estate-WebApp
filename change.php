<?php 
    require 'config.php';
    require 'class/client.php';
    require 'session.php';

    $newpassword = $_POST['pword'];
    $email = $_SESSION['id'];

    $client = new client();

    $updatePassword = $client->ChangePassword($email,$newpassword);

    if($updatePassword > 0)
    {
        echo '<script>window.alert("Your password has been updated successfully");</script>';
            $url='Profile.php';
            header("Location: $url");
    }

?>