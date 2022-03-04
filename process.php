<?php
     try {
         
       
        require 'config.php';
        require 'session.php';
        require 'class/paypalExpress.php';

       

        $paypalExpress = new paypalExpress();
           
        if(!empty($_GET['paymentRef']) && !empty($_GET['payerID']) && !empty($_GET['token']) && !empty($_GET['propid']) ){
           
            $paymentRef = $_GET['paymentRef'];
            $payerID = $_GET['payerID'];
            $token = $_GET['token'];
            $propid = $_GET['propid'];

           // checking the returned details if they are the same with the Paypal payment data 
         
           $paypalCheck=$paypalExpress->paypalCheck($paymentRef, $propid, $payerID, $token);

            if($paypalCheck){

                header("Location:Reciept.php");
            }         
        }
        else{

            header('Location:index.php'); // redirecting users if there is no transaction details on the url
       }

        } catch (Exception $th) {
            echo "Error : " .$th->getMessage();
        }

        
?>