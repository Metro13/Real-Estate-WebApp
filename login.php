<?php 
         session_start();

    try {

      //  require 'config.php';
        require 'class/client.php';
        
        $_SESSION['Login_attempts'] = 0;
        
        

            
    if(!empty($_SESSION['id'])){
        header('Location:index.php');
     }
      
      $errorMsgLogin ='';
      if (!empty($_POST['loginSubmit']))
      {
        $useremail = $_POST['usermail'];
        $password = $_POST['pword'];
          
          if(strlen(trim($useremail))>1 && strlen(trim($password))>1 )
          {
            $client = new client();
            $loginData = $client->userLogin($useremail);
             
              if($loginData)
              {
                 if($password == $loginData->Password && $loginData->Status == "Active"){
                    $url='index.php';
                    header("Location: $url"); // Page redirecting to home.php
                    $_SESSION['id'] = $loginData->EmailAddress;
                 }
                 if($useremail == $loginData->EmailAddress && $password == $loginData->Password && $loginData->Status == "Blocked"){

                    $errorMsgLogin="Sorry seems like your Account was Blocked, Attempt to do a recovery Below or Contact us to reset your Password";
                  }
                 
                 if($password != $loginData->Password || $useremail != $loginData->EmailAddress && $loginData->Status == "Active"){
                    $errorMsgLogin="Incorrect Username or Password";
                    $_SESSION['Login_Attempts'] += 1;

                 }
                
              }
             
              
          }
          
      }
           
        }
     catch (PDOException $th) {
        echo 'There was an Error'. $th->getmessage();
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Justice Properties</title>
</head>

<body class="font-sans">
    <script>
    AOS.init();
    </script>

    <div data-aos="fade-right" class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-gray-700 lg:mx-0 mx-16 py-8 px-8 shadow rounded-lg sm:px-10">


            <div>
                <img src="images/icons8_login_as_user_80px.png" class="w-20 m-auto h-20" alt="logo">
            </div>
            <form class="mb-0 space-y-6  text-gray-600" action="" method="post">
                <h3 class="font-bold text-center text-lg text-white">
                    LOGIN
                </h3>
                <div>
                    <label class="block text-sm font-medium text-white" for="email">
                        Email Address
                    </label>
                    <div class="mt-1">
                        <input
                            class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600"
                            type="email" placeholder="Enter your email address" autocomplete="email" required
                            name="usermail" id="usermail">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-white" for="pword">
                        Password
                    </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none 
                            focus:border-indigo-600 focus:ring-5 focus:ring-indigo-600" type="password"
                            autocomplete="current-password" placeholder="Enter your password" required name="pword"
                            id="pword">
                    </div>
                </div>
                <div class="mb-6">
                    <input type="submit" name="loginSubmit" id="loginSubmit" value="Login" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 focus:outline-none 
                            focus:border-indigo-600 focus:ring-5 focus:ring-indigo-600 hover:bg-indigo-800">


                </div>
                <div class="mt-4">
                    <a class="text-white font-medium hover:text-indigo-600" href="registration.php">Not a Member?
                        Sign up here</a>
                </div>

                <div class="mt-1 bg-gray-50 p-4 rounded-lg text-red-600 font-medium text-center">
                    <?php 

                    if($_SESSION['Login_Attempts'] > 3){

                        echo "Maximum attempts reached you Account has been blocked from Logging in for security reasons. click the Link below to recover your account";
                        $client->BlockAccount($useremail);
                        unset($_SESSION['Login_Attempts']);
                    }
                    
                    else{
                        echo $errorMsgLogin;
                    }
                    ?>

                </div>
                <div class="mt-2">
                    <a class="text-white font-medium hover:text-indigo-600" href="PasswordRecovery.php">Recover
                        Account</a>
                </div>
            </form>

        </div>
    </div>

</body>

</html>