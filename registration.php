<?php 

    require 'config.php';
    require 'class/client.php';


    if (!empty($_POST['submit'])){
        
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
    <script src="js/jquery-3.5.1.min.js"></script>

    <title>Justice Properties</title>
</head>

<body class="antialised newFont bg-gray-100">
    <div class="mt-8 sm:mx-auto mb-6 sm:w-full mx-4 sm:max-w-md">
        <div class="bg-gray-800 lg:mx-0 mx-8 py-8 px-8 shadow rounded-lg sm:px-10">
            <div>
                <img src="images/icons8_registration_80px.png" class="w-20 m-auto h-20" alt="logo">
            </div>
            <form id="register" class="mb-0 space-y-6" method="POST">

                <h3 class="font-semibold text-center text-lg text-white">
                    REGISTRATION
                </h3>
                <div>
                    <label class="block text-sm font-medium text-white" for="firstname">
                        Firstname
                    </label>
                    <div class="mt-1">
                        <input type="text" placeholder="enter firstname" name="fname" id="fname"
                            class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600">
                    </div>
                    <div id="error1" class="text-red-600 font-bold font-sans"></div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white" for="lastname">
                        Lastname
                    </label>
                    <div class="mt-1">
                        <input
                            class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600"
                            type="text" placeholder="enter lastname" name="lname" id="lname">
                    </div>
                    <div id="error2" class="text-red-600 font-bold font-sans"></div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white" for="email Address">
                        Email Address
                    </label>
                    <div class="mt-1">
                        <input
                            class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600"
                            type="email" placeholder="enter email address" autocomplete="email" name="email" id="email">
                    </div>
                    <div id="error3" class="text-red-600 font-bold font-sans"></div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white" for="age">
                        Age
                    </label>
                    <div class="mt-1">
                        <input
                            class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600"
                            type="number" placeholder="enter age" name="age" id="age">
                    </div>
                    <div id="error4" class="text-red-600 font-bold font-sans"></div>
                </div>


                <div>
                    <label class="block text-sm font-medium text-white" for="gender">
                        Choose Gender
                    </label>
                    <div class="mt-1">
                        <select
                            class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600"
                            name="gender" id="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                    </div>
                </div>


                <div>
                    <label class="block text-sm font-medium text-white" for="password">
                        Password
                    </label>
                    <div class="mt-1">
                        <input placeholder="Enter 8 Digits Password" class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none 
                                    focus:border-indigo-600 focus:ring-5 focus:ring-indigo-600 text-base "
                            type="password" autocomplete="current-password" name="pword" id="pword">
                    </div>
                    <div id="errorPword" class="text-red-600 font-bold font-sans"></div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white" for="Physical Address">
                        City
                    </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none 
                                    focus:border-indigo-600 focus:ring-5 focus:ring-indigo-600" type="text" name="city"
                            placeholder="Enter city of residence" id="city">
                    </div>
                    <div id="error5" class="text-red-600 font-bold font-sans"></div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-white" for="Physical Address">
                        Country
                    </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none 
                                    focus:border-indigo-600 focus:ring-5 focus:ring-indigo-600" type="text"
                            name="country" placeholder="Enter country of residence" id="country">
                    </div>
                    <div id="error6" class="text-red-600 font-bold font-sans"></div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-white" for="Physical Address">
                        Postal Code
                    </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none 
                                    focus:border-indigo-600 focus:ring-5 focus:ring-indigo-600" type="text"
                            name="pcode" placeholder="Enter your postal code" id="pcode">
                    </div>
                    <div id="error7" class="text-red-600 font-bold font-sans"></div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white" for="contact">
                        Contact
                    </label>
                    <div class="mt-1">
                        <input class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none 
                                    focus:border-indigo-600 focus:ring-5 focus:ring-indigo-600" type="text"
                            name="contact" placeholder="enter contact number" id="contact">
                    </div>
                    <div id="errorContact" class="text-red-600 font-bold font-sans"></div>
                </div>
                <div id="success" class="text-white bg-green-600 rounded-lg text-center font-normal"></div>
                <div>
                    <input type="submit" value="Register" id="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 focus:outline-none 
                            focus:border-indigo-600 focus:ring-5 focus:ring-indigo-600 hover:bg-indigo-800">
                </div>
                <div class="mt-4">
                    <a class="text-white font-medium hover:text-indigo-600" href="login.php">Already a Member?
                        Sign in here</a>
                </div>
            </form>
        </div>
    </div>


    <script>
    $(document).ready(function() {

        $('#register').submit(function(event) {
          
            var firstname = $('#fname').val();
            var lastname = $('#lname').val();
            var age = $('#age').val();
            var city = $('#city').val();
            var country = $('#country').val();
            var postal = $('#pcode').val();
            var gender = $('#gender').val();
            var contact = $('#contact').val();
            var password = $('#pword').val();
            var email = $('#email').val();


            var formData = {
                firstname: firstname,
                lastname: lastname,
                age: age,
                City: city,
                Country: country,
                pcode: postal,
                gender: gender,
                contact: contact,
                password: password,
                email: email
            }



            $.ajax({
                url: "register.php",
                type: "POST",
                data: formData,
                dataType: "json",
                encode: true,


            }).done(function(data) {

                console.log(formData);
                //if there are validation errors on the form

                if (!data.success) {
                    console.log(data)
                    if (data.errors.fname) {
                        $('#error1').html(data.errors.fname + "");
                    }
                    if (!data.errors.fname){
                        $('#error1').html("");
                    }
                    if (data.errors.lname) {
                        $('#error2').html(data.errors.lname + "");
                    }
                    if (!data.errors.lname){
                        $('#error2').html("");
                    }
                    if (data.errors.age) {
                        $('#error4').html(data.errors.age + "");
                    }
                    if (!data.errors.age){
                        $('#error4').html("");
                    }
                    if (data.errors.email) {
                        $('#error3').html(data.errors.email + "");
                    }
                    if (!data.errors.email){
                        $('#error3').html("");
                    }
                    if (data.errors.password) {
                        $('#errorPword').html(data.errors.password + "");
                    }
                    if (!data.errors.password){
                        $('#errorPword').html("");
                    }
                    if (data.errors.city) {
                        $('#error5').html(data.errors.city + "");
                    }
                    if (!data.errors.city){
                        $('#error5').html("");
                    }
                    if (data.errors.contact) {
                        $('#errorContact').html(data.errors.contact + "");
                    }
                    if (!data.errors.contact){
                        $('#errorContact').html("");
                    }
                    if (data.errors.postal) {
                        $('#error7').html(data.errors.postal + "");
                    }
                    if (!data.errors.postal){
                        $('#error7').html("");
                    }
                    if (data.errors.country) {
                        $('#error6').html(data.errors.country + "");
                    }
                    if (!data.errors.country){
                        $('#error6').html("");
                    }

                } else {

                   
                    window.location.href = 'index.php';

                }

            });

            event.preventDefault();

        });


    });
    </script>




</body>

</html>