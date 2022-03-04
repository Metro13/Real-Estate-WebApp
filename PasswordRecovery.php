<?php 
        require 'config.php';
        require 'class/client.php';

       
    try {

        if (!empty($_POST['SubmitRequest'])){

            $client = new client();

            $contactEmail = $_POST['email'];

             //getting Client Details
             $ClientDetails = $client->getClient($contactEmail);

             $firstname =  $ClientDetails->Firstname;
             $lastname = $ClientDetails->Lastname;
             $Accountstatus = $ClientDetails->Status;
            
             // setting up default variable values
             $subject = "Account Password Recovery Request";
             $message = "Unblock the Account and Send a Temporary Password via the Email";

            
            if($Accountstatus == "Blocked"){
                $recover= $client->addContactUsMessage($firstname,$lastname,$contactEmail,$subject,$message);
                if($recover > 0){

                    echo '<script>window.alert("Your message has been sent successfully. We will get back to you Via Email shortly");</script>';
    
                }
            }        
            else{
                echo '<script>window.alert("Sorry Your Account seems fine so we cannot process your Request");</script>';
            }
        

    }

    } catch (PDOException $th) {
        echo 'There was an Error '.$th->getMessage();
    }
    
   
     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,400;0,700;0,900;1,300;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="dist/style.css">
    <title>Justice Properties</title>
</head>

<body>
    <div class="mt-8 sm:mx-auto sm:w-full mx-4 pb-8 sm:max-w-md">

        <div class="bg-gray-700 py-8 lg:mx-6 mx-10 px-8 shadow rounded-lg sm:px-10">

            <div>
                <img src="images/icons8_password_reset_80px.png" class="w-20 m-auto h-20" alt="logo">
            </div>

            <form class="mb-0 space-y-6" method="POST">

                <h3 class="font-semibold text-center text-lg pb-2 text-white">
                    Recover Account
                </h3>

                <h1 class="text-white">Please Enter your Email Address. You will recieve a Temporaly password via Email
                    which you will change when you login after the account has been unblocked.</h1>
                <div>
                    <label class="block text-sm font-medium text-white" for="email">
                        Email address *
                    </label>
                    <div class="mt-1">
                        <input type="email" placeholder="enter your Email address" name="email" id="email"
                            class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600">
                    </div>

                </div>

                <div>
                    <input type="submit" value="Send" name="SubmitRequest" id="Submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 focus:outline-none 
        focus:border-indigo-600 focus:ring-5 focus:ring-indigo-600 hover:bg-indigo-800">
                </div>


            </form>


        </div>
</body>

</html>