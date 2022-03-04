<?php
    session_start();
    class client
    {  
        
 
        // User Login Check 
        
        public function userLogin($userEmail) // user Login Function
        {
            try {

                $db = getdbConnection();
                $stmt = $db->prepare("SELECT EmailAddress,Password, Status FROM client WHERE EmailAddress=:email");
                $stmt->bindParam("email", $userEmail,PDO::PARAM_STR) ;
                $stmt->execute();
                $db=null;
               

                if( $stmt->rowCount()==1 ) // checking number of rows affected
                {
                    $data = $stmt->fetch(PDO::FETCH_OBJ);
                    return $data;
                }
                else{

                   return false;
                }

            } catch (PDOException $th) {
                echo "Error " . $th->getMessage();
            }         
            
        }
        

        //blocking user account 

        public function BlockAccount($email)
        {
            $status = "Blocked";
            $db = getdbConnection();
            $stmt = $db->prepare("UPDATE client SET Status=:status WHERE EmailAddress=:email");
            $stmt->bindParam("email", $email,PDO::PARAM_STR) ;
            $stmt->bindParam("status", $status,PDO::PARAM_STR) ;
        
            $stmt->execute();
            $db=null;
        }

        // User Registration

        public function registration($fname,$lname,$age,$gender,$email,$Passx,$city,$country,$postal,$contact)
        {
            $db = getdbConnection();          
            $stmt = $db->prepare("INSERT INTO client(Firstname, Lastname, Age, Gender, EmailAddress, Password, City, Country , PostalCode , Contact) VALUES (:firstname, :lastname, :age, :gender, :email, :pass, :city, :country, :postal, :contact)");
            $stmt->bindParam("firstname", $fname, PDO::PARAM_STR);
            $stmt->bindParam("lastname", $lname, PDO::PARAM_STR);
            $stmt->bindParam("city", $city, PDO::PARAM_STR);
            $stmt->bindParam("country", $country, PDO::PARAM_STR);
            $stmt->bindParam("age", $age, PDO::PARAM_INT);
            $stmt->bindParam("gender", $gender, PDO::PARAM_STR); 
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $stmt->bindParam("pass", $Passx, PDO::PARAM_STR);
            $stmt->bindParam("postal", $postal, PDO::PARAM_STR);
            $stmt->bindParam("contact", $contact, PDO::PARAM_STR);     
            $stmt->execute();
            $count = $stmt->rowcount();      

            if($count > 0)
            {
                return $count;
            }
            else{
                return false;
            }
            $db=null;   
        }

        // getting user Email address 
        public function getEmail($email)
        {
            $db = getdbConnection();          
            $stmt = $db->prepare("SELECT EmailAddress FROM client Where EmailAddress=:email");
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowcount();      
            if($count > 0)
            {
                return $count;
            }
            else{
                return false;
            }
            $db=null;

        }

        // fetching client details

        public function getClient($email)
        {
            $db = getdbConnection();          
            $stmt = $db->prepare("SELECT * FROM client Where EmailAddress=:email");
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db=null;
            return $data;
        }

        // changing password on profile

        public function ChangePassword($email,$password)
        {
            $db = getdbConnection();          
            $stmt = $db->prepare("UPDATE client SET Password=:pass WHERE EmailAddress=:email");
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $stmt->bindParam("pass", $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowcount();
            if($count > 0){
                return $count;
            }
            else if($count == 0){
                return false;
            }
            $db=null;      

           
        }

          // adding Contact message       
           
    public function addContactUsMessage($firstname,$lastname,$email,$subject,$message)
    {
        $db = getdbConnection();
        $stmt = $db->prepare("INSERT INTO Contacts(Firstname,Lastname,Email,Subject,Message) VALUES (:firstname,:lastname,:email,:subject,:message)");
        $stmt->bindParam("firstname", $firstname, PDO::PARAM_STR);
        $stmt->bindParam("lastname", $lastname, PDO::PARAM_STR);
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->bindParam("subject", $subject, PDO::PARAM_STR);
        $stmt->bindParam("message", $message, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowcount();
        if($count > 0){
            return $count;
        }
        else if($count == 0){
            return false;
        }
        $db=null;      


   }
    // adding user Experience feedback

   Public function addUserFeedBack($email,$message){
        $db = getdbConnection();  
        $stmt = $db->prepare("INSERT INTO feedback(EmailAddress,Message) VALUES (:email,:message)");
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->bindParam("message", $message, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowcount();
        if($count > 0){
            return $count;
        }
        else if($count == 0){
            return false;
        }
        $db=null;     
   }


    // subscribing to newsletter to recieve updates
    public function newsletterSubscription($email)
    {
        
            $db = getdbConnection();  
            $stmt = $db->prepare("INSERT INTO subscriptions(Email) VALUES (:email)");
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowcount();

            if($count > 0){
                return $count;
            }
            else if($count == 0){
                return false;
            }
            $db=null;      
     
    }

    // searching for available properties

    public function searchProperty($value)
    {
        $db = getdbConnection();  
        $stmt = $db->prepare("SELECT * FROM property WHERE PropertyStatus='Available' AND City LIKE '%".$value."%'");
        $stmt->bindParam("value", $value, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowcount();
        if($count > 0){
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }
        else{
            return false;
        }
       
        $db=null;
    }


     //inquiring property details

        public function doInquiry($propertyID,$firstname,$lastname,$userEmail,$message){
        
                $db = getdbConnection();  
                $stmt = $db->prepare("INSERT INTO inquiries(PropertyID,EmailAddress,Firstname,Lastname,Message) VALUES(:pid, :email , :fname, :lname, :message)");
                $stmt->bindParam("email", $userEmail, PDO::PARAM_STR);
                $stmt->bindParam("pid", $propertyID, PDO::PARAM_STR);
                $stmt->bindParam("fname", $firstname ,PDO::PARAM_STR);
                $stmt->bindParam("lname", $lastname, PDO::PARAM_STR);
                $stmt->bindParam("message", $message, PDO::PARAM_STR);
                $stmt->execute();
                $count = $stmt->rowcount();

                if($count > 0){
                    return $count;
                }
                else if($count == 0){
                    return false;
                }
                $db=null;
        } 
    }
?>