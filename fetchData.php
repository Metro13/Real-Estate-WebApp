<?php 
    require 'config.php';
    require 'class/client.php';


    // fetching search data from the database

    $searchValue = $_POST['lookup'];
    $output = "";
    $newClient = new client();

    $result = $newClient->searchProperty($searchValue);

    if(!empty($result))
    {   
        // adding fetched results into a JSON object which will be used by AJAX
        
        $output = $result;
        echo json_encode(['Property' => $output]);
    }
    
    else{
        return false;

    }

?>