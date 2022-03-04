<?php
    
    class PaypalExpress{ 
       

       public function getProperty($pid) // get property by Id
        {
            $db = getdbConnection();
            $stmt = $db->prepare("SELECT * FROM property WHERE PropertyID =:pid");
            $stmt->bindParam("pid", $pid, PDO::PARAM_STR) ;
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db=null;
            return $data;
            
        }

        // updating payments

       public function updatePayments($propid, $amount, $paymentRef, $payerID ,$token) // inserting into Payment 
       {
           $uid = $_SESSION['id'];

           if($this->paymentCheck($paymentRef) < 1 ){

           $db = getdbConnection();
           $stmt = $db->prepare("INSERT INTO payments(EmailAddress, PropertyID, Amount, PaymentReference, PayerID, Token) VALUES (:uid, :propid,:amount, :paymentRef, :payerID , :token)");
           $stmt->bindParam("uid", $uid, PDO::PARAM_STR) ;
           $stmt->bindParam("amount", $amount, PDO::PARAM_STR) ;
           $stmt->bindParam("propid", $propid, PDO::PARAM_STR) ;
           $stmt->bindParam("paymentRef", $paymentRef, PDO::PARAM_STR) ;
           $stmt->bindParam("payerID", $payerID, PDO::PARAM_STR) ;
           $stmt->bindParam("token", $token, PDO::PARAM_STR) ;
          
           $stmt->execute();
           $db=null;
           return true;
           }
           else{
              return 'Failed to insert the Payment details the Payment Reference is Already available';
           }
           
       }

       // updating property status

       public function UpdatePropertyStatus($id)
       {
            $db = getdbConnection();
            $stmt = $db->prepare("UPDATE property SET PropertyStatus = 'Sold' WHERE PropertyID =:id");
            $stmt->bindParam("id", $id, PDO::PARAM_STR) ;
            $stmt->execute();
            $db=null;
       }
       
       public function paymentCheck($paymentRef) // checking if the payment details are the same
       {
           $db = getdbConnection();
           $stmt = $db->prepare("SELECT * FROM payments WHERE PaymentReference=:paymentRef");
           $stmt->bindParam("paymentRef", $paymentRef, PDO::PARAM_STR) ;
           $stmt->execute();
           $count = $stmt->rowcount();
           $db=null;
           return $count;
           
       }

        // validating paypal transaction details
        public function paypalCheck($paymentID, $pid, $payerID, $paymentToken)

        {
            $errMSG = "failed to get the Access Token from Paypal";

            // setting Curl Session options to allow to get Aunthorization token using HTTP requests
            $ch = curl_init();
            $clientId = PayPal_CLIENT_ID;
            $secret = PayPal_SECRET;
            curl_setopt($ch, CURLOPT_URL, PayPal_BASE_URL.'oauth2/token');
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERPWD, $clientId . ":" . $secret);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
            $result = curl_exec($ch);
            $accessToken = null;
            
            // checking if the Curl Request got the Authorization token
            if (empty($result)){
                echo $errMSG;
            }
            
            else {

                // using the authorization token to access the original payment details from Paypal payment server in JSON

                $json = json_decode($result);
                $accessToken = $json->access_token;
                $curl = curl_init(PayPal_BASE_URL.'payments/payment/' . $paymentID);
                curl_setopt($curl, CURLOPT_POST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_HEADER, false);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer ' . $accessToken,
                'Accept: application/json',
                'Content-Type: application/xml'
                ));

                $response = curl_exec($curl);
                $result = json_decode($response);
                
                //assigning varibales to access the JSON data and compare it to the returned details from the website

                $state = $result->state;
                $total = $result->transactions[0]->amount->total;
                $currency = $result->transactions[0]->amount->currency;
                $subtotal = $result->transactions[0]->amount->details->subtotal;
                $recipient_name = $result->transactions[0]->item_list->shipping_address->recipient_name;
                curl_close($ch);
                curl_close($curl);
                
                $property = $this->getProperty($pid);
                
                if($state == 'approved' && $currency == $property->Currency && $property->Price ==  $subtotal)
                {
                    
                    $_SESSION['custname'] =$recipient_name;
                    $_SESSION['PropertyID'] = $pid;
                    $this->updatePayments($pid,$subtotal,$paymentID,$payerID,$paymentToken);
                    $this->UpdatePropertyStatus($pid);
                   

                    return true;
                    
                }
                else{
                    
                    return false;
                }
                
            }
            
        }
        
    }
?>