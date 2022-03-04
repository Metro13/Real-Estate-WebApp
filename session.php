<?php   
    // setting user session
    
    if(empty($_SESSION['id'])){
        header('Location:login.php');
    }
    if(isset($_SESSION['id'])){
        return true;
    }
?>