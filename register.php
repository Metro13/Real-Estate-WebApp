
<?php 

try {

    require 'class/client.php';
    require 'config.php';
    
    
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $city = $_POST['City'];
    $country = $_POST['Country'];
    $postal = $_POST['pcode'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];

    $newclient = new client();
    
    // validation of registration details

    $errors = [];
    $data = [];

    if (empty($firstname)) {
        $errors['fname'] = "Firstname field can't be empty.";
    }
    if (empty($lastname)) {
        $errors['lname'] = "Lastname field can't be empty.";
    }
    if (empty($age)) {
        $errors['age'] = "Age field can't be empty.";
    }
    if (empty($email)) {
       
        $errors['email'] = 'Email address required.';
    }
    
    if(empty($city)){
        $errors['city'] = 'city of residence required.';
    }
    if(empty($country)){
        $errors['country'] = 'country of residence required.';
    }
    if(empty($postal)){
        $errors['postal'] = 'Postal code required.';
    }
    if(empty($password)){

        $errors['password'] = "Password field can't be empty.";
    }
    if(!empty($password)){
        if(strlen($password) < 8){

            $errors['password'] = "Passwords should atleast contain 8 characters.";
        }
        else if(!preg_match("#[0-9]+#",$password))
        {
            $errors['password'] = "Passwords should atleast contain some Numbers.";
        }
    }

    if(empty($contact)){
        $errors['contact'] = "Contact field can't be empty.";
    }

    if(!empty($contact)){
        if(strlen($contact) < 10)

            $errors['contact'] = "Contacts should contain 10 digits.";
    }



    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;

    } else if(empty($errors))
    {
            $getEmail = $newclient->getEmail($email);
            
                if($getEmail > 0){
                    
                    $errors['email'] = 'Please choose a different email address there is a user with the same email address';
                    $data['success'] = false;
                    $data['errors'] = $errors;
                                    
                }
                else{
                   // $securePassword = password_hash($password,PASSWORD_DEFAULT);
                    $newclient->registration($firstname,$lastname,$age,$gender,$email,$password,$city,$country,$postal,$contact);          
                    $data['success'] = true;
                    $data['message'] = 'Registered Successfully';
                  
                }   
    }
         
    echo json_encode($data);


} catch (PDOException $e) {

    echo "There was an Error ". $e->getmessage();
}
    
?>
