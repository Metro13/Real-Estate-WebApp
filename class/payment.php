<?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
  
      require 'PHPMailer/Exception.php';
      require 'PHPMailer/PHPMailer.php';
      require 'PHPMailer/SMTP.php';
  

    class payment
    {
        public function paymentReciept($uid,$propid) // displaying payment Details
        {
           
            $db = getdbConnection();
            $stmt = $db->prepare("SELECT P.PropertyType, P.PropertyStatus, P.Location ,P.City, X.Amount ,P.Currency , X.EmailAddress, X.PaymentReference, X.Date FROM payments X , property P WHERE X.EmailAddress =:uid AND X.PropertyID =:propID");
            $stmt->bindParam("uid", $uid, PDO::PARAM_STR) ;
            $stmt->bindParam("propID", $propid, PDO::PARAM_STR) ;
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db=null;
            return $data;
            
        }
  
        
        public function updatePayments($propid, $paymentRef, $payerID ,$token) // inserting into Payment 
        {
            $uid = $_SESSION['id'];

            if($this->paymentCheck($paymentRef) < 1 ){

            $db = getdbConnection();
            $stmt = $db->prepare("INSERT INTO payments(EmailAddress, PropertyID,PaymentReference, PayerID, Token) VALUES (:uid, :propid, :paymentRef,:payerID ,:token)");
            $stmt->bindParam("uid", $uid, PDO::PARAM_STR) ;
            $stmt->bindParam("propid", $propid, PDO::PARAM_STR) ;
            $stmt->bindParam("paymentRef", $paymentRef, PDO::PARAM_STR) ;
            $stmt->bindParam("payerID", $payerID, PDO::PARAM_STR) ;
            $stmt->bindParam("token", $token, PDO::PARAM_STR) ;
           
            $stmt->execute();
            $db=null;
            return true;
            }
            else{
               return 'There was an Error.. Payment Reference is Already Available. Please Contact us for further Assistance';
            }
            
        }

        // sending automated emails on property purchase

        public function sendAutomatedNotifications($email)
        { 
            $mail = new PHPMailer;
        
            $mail->isSMTP();
           // $mail->SMTPDebug =2;
            $mail->Host = 'smtp.gmail.com';

            $mail->SMTPOptions = array(
                'ssl'=>array(
                    'verify_peer' => false,
                    'verify_peer_name'=>false,
                    'allow_self_signed' => true
                )
                );
            $mail->SMTPAuth = true;
            $mail->Username = 'buyjusticeproperties@gmail.com';
            $mail->Password = 'EthicalHacker99';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            
            $mail->setFrom('buyjusticeproperties@gmail.com','Justice Properties');
            
            $mail->addAddress($email);
            
            $mail->Subject = 'Justice Properties Listed Property Notification';
            
            $mail->isHTML(true);
            
            $mailContent ='
            <h2>Property Purchase Notification</h2>
            <P>Dear Sir/Madam.</p>
            <p>We woud like to Notify you that one of the Properties you listed with us has been purchased.Therefore
            we request you to come and finalise the arrangements of handing in documents to the new owner of the Property and to collect your payment.
            </p>
            <p>Thank you for doing business with us.</p>
            <p>Justice Properties.</p>
            ';
            $mail->Body = $mailContent;
            
            $mail->send();
            
        }
         // checking payment details

        public function paymentCheck($paymentRef)
        {
            $db = getdbConnection();
            $stmt = $db->prepare("SELECT * FROM payments WHERE PaymentReference=:paymentRef");
            $stmt->bindParam("paymentRef", $paymentRef, PDO::PARAM_STR) ;
            $stmt->execute();
            $count = $stmt->rowcount();
            $db=null;
            return $count;
            
        }

        // Converting the USD to Malawian Kwacha dynamically

        function convertCurrency($amount){
            
            $apikey = 'e2fcbd5ec5a053650e92';
            $from = "USD";
            $to ="MWK";
          
            $from_Currency = urlencode($from);
            $to_Currency = urlencode($to);
            $query =  "{$from_Currency}_{$to_Currency}";
          
            $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
            $obj = json_decode($json, true);
          
            $val = floatval($obj["$query"]);
          
          
            $total = $val * $amount;

            $total = (0+str_replace(",","",$total));
       
            // checking if the total is a number
            if(!is_numeric($total)) return false;
        
            // Filtering the Number to a more Readable code
           
            if($total>1000000) return round(($total/1000000),1).' Million';
            else if($total>1000) return round(($total/1000),1).' Thousand';
            return number_format($total);
          }
    }
       
 
?>