<?php
    class property
    {
          
        public function fetchProperty($counter) // query all available properties by LIMIT
        {
            
            $db = getdbConnection();
            $stmt = $db->prepare("SELECT * FROM Property WHERE PropertyStatus ='Available' LIMIT $counter");
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db=null;
            return $data;
            
        }
        public function fetchAllProperty() // query all available properties
        {
            
            $db = getdbConnection();
            $stmt = $db->prepare("SELECT * FROM Property WHERE PropertyStatus ='Available'");
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db=null;
            return $data;
            
        }
       
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

        public function getPropertyImages($pid) // get images by property Id
        {
            $db = getdbConnection();
            $stmt = $db->prepare("SELECT Image FROM propertyimages WHERE PropertyID =:pid");
            $stmt->bindParam("pid", $pid, PDO::PARAM_STR) ;
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_NUM);
            $db=null;
            return $data;
            
        }

       
    }
    
?>
