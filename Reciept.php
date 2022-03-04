<?php
    require 'config.php';
    require 'session.php';
    require 'class/payment.php';
    require 'class/owner.php';

    try {
        $Owners = new  owner();

        $id = $_SESSION['id'];
        $fullname = $_SESSION['custname'];
        $propertyID =  $_SESSION['PropertyID'];

        //displaying transaction details

        if(isset($id) && isset($fullname)){

            $payment = new payment();   
            $Paymentsdata = $payment->paymentReciept($id,$propertyID);

          $OwnersEmailAddress = $Owners->getOwnerEmail(); 

            // sending automated emails after payment

           if(!empty($OwnersEmailAddress))

            {
              $payment->sendAutomatedNotifications($OwnersEmailAddress->EmailAddress);
            }
        
        }
        

    } catch (PDOException $th) {
        echo "Error " .$th->getMessage();
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
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">


        <div class="bg-gray-800 py-10 lg:mx-3 mx-12 px-8 shadow rounded-lg sm:px-10">
            <div>
                <img src="images/icons8_paypal_80px_2.png" class="w-20 m-auto h-20" alt="invoice">
            </div>
            <h4 class=" text-center py-4 px-4 text-white font-light text-lg font-sans">
                Your Purchase Has been Processed Successfully.
                Thank you for choosing us
            </h4>
            <div class="mt-1 mb-3 text-white font-medium text-center">
                <h2 class="font-bold text-xl">Transaction Details</h2>
            </div>
            <div class="p-6 border-4 border-opacity-50 border-gray-600 rounded-xl">
                <div class="mt-0 px-2 py-2">
                    <label for="Property" class="font-bold text-indigo-400">Customer name : </label>
                    <h3 class="font-medium text-white"><?php echo $fullname; ?></h3>
                </div>
                <div class="mt-0 mb-0 px-2 py-2">
                    <label for="Property" class="font-bold text-indigo-400">Price : </label>
                    <h3 class="font-medium text-white"><?php echo $Paymentsdata->Amount; ?></h3>
                </div>
                <div class="mt-0 mb-0 px-2 py-2">
                    <label for="Property" class="font-bold text-indigo-400">Currency : </label>
                    <h3 class="font-medium text-white"><?php echo $Paymentsdata->Currency; ?></h3>
                </div>
                <div class="mt-0 mb-0 px-2 py-2">
                    <label for="Property" class="font-bold text-indigo-400">Email Address : </label>
                    <h3 class="font-medium text-white"><?php echo $Paymentsdata->EmailAddress; ?></h3>
                </div>
                <div class="mt-0 mb-0 px-2 py-2">
                    <label for="Property" class="font-bold text-indigo-400">Payment Reference : </label>
                    <h3 class="font-medium text-white"><?php echo $Paymentsdata->PaymentReference; ?></h3>
                </div>
                <div class="mt-0 mb-0 px-2 py-2">
                    <label for="Property" class="font-bold text-indigo-400">Date Of Payment : </label>
                    <h3 class="font-medium text-white"><?php echo $Paymentsdata->Date; ?></h3>
                </div>
            </div>

            <div class="mt-1 mb-1 px-2 py-2">
                <a href="index.php" class="font-medium text-white hover:text-indigo-400">Return to Homepage</a>
            </div>

        </div>
    </div>


</body>

</html>