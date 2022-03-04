<?php
    class owner 
    {
        // getting property owners email address
        public function getOwnerEmail()

        {
            $db = getdbConnection();          
            $stmt = $db->prepare("SELECT P.EmailAddress FROM propertyowner P,payments O WHERE P.PropertyID = O.PropertyID");
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db=null;
            return  $data;

        }
        
    }
?>