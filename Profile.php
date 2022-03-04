<?php 
        require 'config.php';
        require 'session.php';  
        require 'class/client.php';


        $client = new client();

        $loggedInEmail = $_SESSION['id'];

        $myDetails = $client->getClient($loggedInEmail);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,400;0,700;0,900;1,300;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="dist/air-slider.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/5416c66261.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <title>JusticeProperties</title>
</head>

<body>

    <header class="lg:px-10 px-6 bg-white flex flex-wrap items-center lg:py-4 py-2">
        <div class="flex items-center flex-shrink-0 mr-6">
            <div
                class="font-black text-xl flex newFont text-center items-center m-auto pb-2 text-gray-700 p-2 rounded-lg">
                <div>
                    <img src="images/icons8_j_50px.png" class="w-10 h-10 bg-gray-700 mr-2 rounded-full" alt="logo">
                </div>
                Justice Properties
            </div>

        </div>
        <div class="w-full block flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="sm-flex-grow text-base">
                <a href="index.php"
                    class="block mt-4 sm:inline-block sm:mt-0 text-black-200 hover:text-indigo-600 hover:border-black mr-4 ">
                    Home

                </a>
                <a href="propertyPage.php"
                    class="block mt-4 sm:inline-block sm:mt-0 text-black-200 hover:text-indigo-600 mr-4">
                    Properties

                </a>
                <a href="#services"
                    class="block mt-4 sm:inline-block sm:mt-0 text-black-200 hover:text-indigo-600 mr-4">
                    Services

                </a>
                <a href="#foooter" class="block mt-4 sm:inline-block sm:mt-0 text-black-200 hover:text-indigo-600 mr-4">
                    About Us

                </a>
                <a href="Help&Support.php"
                    class="block mt-4 sm:inline-block sm:mt-0 text-black-200 hover:text-indigo-600 mr-4">
                    Help & Support

                </a>

            </div>


        </div>

        <a href="Profile.php"
            class="lg:ml-4 hidden items-center md:pt-0 pt-6 text-gray-700 text-base font-normal justify-start lg:mb-0 mb-4 cursor-pointer">
            <img src="images/icons8_male_user_50px.png" class="w-10 h-10 mr-2 rounded-full" alt="logo">
            <?php echo $_SESSION['id']; ?>
        </a>
    </header>

    <script>
    AOS.init();
    </script>

    <!-------- Profile structure------>
    <section>
        <div class="lg:grid grid-cols-1">
            <div class="col-start-1 row-start-1 h-28 pt-8 text-white bg-gray-700">
                <div class="lg:flex justify-center ">
                    <img src="images/icons8_male_user_80px.png" class="w-24 h-24  m-auto relative -mb-16 rounded-full"
                        alt="logo">
                </div>

            </div>
            <div class="col-start-1 text-center text-white row-start-2 h-28 bg-gray-800">
                <h1 class="text-center text-xl font-semibold pt-10"><?php echo $myDetails->Firstname; ?>
                    <?php echo $myDetails->Lastname; ?></h1>
                <span class="flex justify-center">
                    <i class="fa fa-map-marker text-gray-100 text-xl pt-2"></i>
                    <h1 class="text-center text-lg font-light pt-2"><?php echo $myDetails->City; ?>,
                        <?php echo $myDetails->Country; ?>.</h1>
                </span>

            </div>
            <div class="bg-gray-800">
                <div class="bg-gray-800 p-10 lg:mx-40 sm:mx-6">
                    <div class="border-solid lg:pb-6 border-4 border-opacity-50 text-white rounded-lg border-gray-400">
                        <h1 class="font-bold text-center text-xl px-8 py-8">Account Details</h1>

                        <div class="lg:mx-72 p-6 pb-1 bg-gray-700 text-white">
                            <h1 class="ml-16 font-bold text-lg -mb-4 mt-4">Fullname</h1>
                            <div class="flex">
                                <img src="images/icons8_male_user_80px_2.png" class="w-12 h-12 rounded-full" alt="logo">
                                <h1 class="ml-4 text-base mt-3"><?php echo $myDetails->Firstname; ?>
                                    <?php echo $myDetails->Lastname; ?></h1>
                            </div>
                        </div>
                        <div class="lg:mx-72 p-6 pb-1 pt-1 bg-gray-700 text-white">
                            <h1 class="ml-16 font-bold text-lg -mb-4 mt-4">Email Address</h1>
                            <div class="flex">
                                <img src="images/icons8_gmail_80px.png" class="w-10 h-10" alt="logo">
                                <h1 class="ml-6 text-base mt-3"><?php echo $myDetails->EmailAddress; ?></h1>
                            </div>
                        </div>
                        <!---
                        <div class="lg:mx-72 p-6 pb-1 pt-1 bg-gray-700 text-white">
                            <h1 class="ml-16 font-bold text-lg -mb-4 mt-4">Password</h1>
                            <div class="flex">
                                <img src="images/icons8_password_window_80px.png" class="w-10 h-10" alt="logo">
                                <h1 class="ml-6 text-base mt-3"><//?php echo $myDetails->Password; ?></h1>
                            </div>
                        </div>---->
                        <div class="lg:mx-72 p-6 pb-1 pt-1 bg-gray-700 text-white">
                            <h1 class="ml-16 font-bold text-lg -mb-4 mt-4">Age</h1>
                            <div class="flex">
                                <img src="images/icons8_age_80px.png" class="w-10 h-10" alt="logo">
                                <h1 class="ml-6 text-base mt-3"><?php echo $myDetails->Age; ?></h1>
                            </div>
                        </div>
                        <div class="lg:mx-72 p-6 pb-1 pt-1 bg-gray-700 text-white">
                            <h1 class="ml-16 font-bold text-lg -mb-4 mt-4">Gender</h1>
                            <div class="flex">
                                <img src="images/icons8_gender_80px.png" class="w-10 h-10" alt="logo">
                                <h1 class="ml-6 text-base mt-3"><?php echo $myDetails->Gender; ?></h1>
                            </div>
                        </div>
                        <div class="lg:mx-72 p-6 pb-1 pt-1 bg-gray-700 text-white">
                            <h1 class="ml-16 font-bold text-lg -mb-4 mt-4">City</h1>
                            <div class="flex">
                                <img src="images/icons8_location_80px.png" class="w-10 h-10" alt="logo">
                                <h1 class="ml-6 text-base mt-3"><?php echo $myDetails->City; ?>,
                                    <?php echo $myDetails->Country; ?>.</h1>
                            </div>
                        </div>
                        <div class="lg:mx-72 p-6 pb-1 pt-1 bg-gray-700 text-white">
                            <h1 class="ml-16 font-bold text-lg -mb-4 mt-4">Contact</h1>
                            <div class="flex">
                                <img src="images/icons8_iphone_80px.png" class="w-10 h-10" alt="logo">
                                <h1 class="ml-6 text-base mt-3"><?php echo $myDetails->Contact; ?></h1>
                            </div>
                        </div>
                        <div class="lg:mx-72 p-6 pb-12 pt-1 bg-gray-700 text-white">
                            <h1 class="ml-16 font-bold text-lg -mb-4 mt-4">Postal Code</h1>
                            <div class="flex">
                                <img src="images/icons8_letterbox_80px.png" class="w-10 h-10" alt="logo">
                                <h1 class="ml-6 text-base mt-3"><?php echo $myDetails->PostalCode; ?></h1>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="text-center">
                    <input type="button" name="Submit" id="changePass" value="Change Password"
                        class="bg-indigo-700 te hover:bg-indigo-900 text-white text-base font-semibold px-6 md:py-2 py-2 mb-4 rounded-lg">
                </div>


                <div id="change" class="mt-8 hidden sm:mx-auto sm:w-full mx-4 pb-8 sm:max-w-md">

                    <div class="bg-gray-700 py-8 lg:mx-6 mx-10 px-8 shadow rounded-lg sm:px-10">

                        <form class="mb-0 space-y-6" action="change.php" method="POST">

                            <h3 class="font-semibold text-center text-lg pb-2 text-white">
                                Change password
                            </h3>
                            <div>
                                <label class="block text-sm font-medium text-white" for="firstname">
                                    New Password
                                </label>
                                <div class="mt-1">
                                    <input type="password" placeholder="Enter your password" name="pword" id="pword"
                                        class="w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600">
                                </div>

                            </div>

                            <div>
                                <input type="submit" value="change" id="Submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 focus:outline-none 
                            focus:border-indigo-600 focus:ring-5 focus:ring-indigo-600 hover:bg-indigo-800">
                            </div>


                        </form>


                    </div>


                </div>
    </section>
    <script>
    $(document).ready(function() {
        $("#changePass").click(function() {
            $("#change").toggleClass("hidden");
        });
    });
    </script>

    <!----User Feeback form----->

    <section id="Feed">
        <div id="feedback"
            class="hidden mb-6 bg-gradient-to-r from-gray-800 to-gray-900 lg:p-12 rounded-3xl text-white md:mx-96 mx-14 mt-4"
            id="">
            <form action="feedback.php" class=" md:ml-20 ml-4" method="post">
                <div class="pb-6 md:pl-0 pl-10">
                    <h1 class="text-lg pb-4 pt-6 font-medium">Did You find what you were Looking for on this Website?
                    </h1>
                    <select
                        class=" border text-gray-900 border-gray-300 px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:border-pink-600"
                        name="choice" id="choice">
                        <option value="" selected disabled>Select a Response</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <div class="mt-8">
                        <p class="" id="context"></p>
                        <p>We will use this information to Help Improve this site</p>
                        <div>

                            <div class="mt-4 pr-10">
                                <textarea placeholder="enter your Feedback here"
                                    class="lg:w-9/12 text-gray-900 w-full border font-normal border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-pink-600"
                                    type="text" required name="message" id="message"></textarea>
                                <p class="mt-2 italic font-light">Do not include sensitive information Here such as
                                    Account Numbers and Passwords. Your feedback should be less than 300 Words or else
                                    Contact us</p>
                            </div>
                        </div>
                        <div class="lg:row-start-1 mt-6 md:col-start-2 ">
                            <input type="submit" value="Send Feedback"
                                class="flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-700 hover:bg-indigo-900">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!---- toggle Feedback form--->
    <script>
    $(document).ready(function() {
        $("#feed").click(function() {
            $("#feedback").toggleClass("hidden");
        });

        ////////////////////////////

        $('#choice').change(function() {
            var selected = $('#choice option:selected').text();

            if (selected == "Yes") {
                $('#context').html("Do you have anything else to tell us?");
            }
            if (selected == "No") {
                $('#context').html("What were you Looking for?");
            }
        })
    });
    </script>


    <!----Footer Section----->

    <footer class="mt-0 newFont ">
        <div class="bg-gray-800 md:my-0 md:flex md:flex-row grid  ">
            <div class=" md:w-4/6 px-16">
                <div class="mt-8 mx-10 px-14 py-6">
                    <img src="images/logo.png" class="w-16" alt="company logo">
                </div>
                <div class="font-light px-10 text-gray-50">
                    <p>Making property acquisition simpler through buying properties online where ever you are.
                        Justice Property was established in 2009.We are situated in Blantyre opposite KFC. We are Real
                        Estate
                        Agents who Manages and sell properties on your Behalf</p>
                </div>
                <div class="px-10 pt-4 pb-10 ">
                    <!--- Social medial icons-->
                    <span class=" text-2xl text-gray-600 ">
                        <i class="fa fa-facebook hover:text-pink-500 mr-7 transition duration-500 ease-in-out"></i>
                        <i class="fa fa-twitter mr-7 hover:text-pink-500 transition duration-500 ease-in-out"></i>
                        <i class="fa fa-instagram mr-7 hover:text-pink-500 transition duration-500 ease-in-out"></i>
                        <i class="fa fa-pinterest mr-7 hover:text-pink-500 transition duration-500 ease-in-out"></i>
                    </span>
                </div>

            </div>
            <div class="  md:w-3/6 text-gray-50 px-16">
                <h1 class="font-bold text-lg px-14 py-6 mt-8 ">Company</h1>

                <a class="hover:underline text-gray-50" href="#">
                    <h1 class="font-light px-14 py-1 mt-1">Properties</h1>
                </a>
                <a class="hover:underline text-gray-50" href="#">
                    <h1 class="font-light px-14 py-1 mt-1 ">Services</h1>
                </a>
                <a class="hover:underline text-gray-50" href="#contact">
                    <h1 class="font-light px-14 py-1 mt-1">Contacts</h1>
                </a>

            </div>
            <div class=" md:w-3/6 text-gray-50 px-16">
                <h1 class="font-bold text-lg px-14 py-6 mt-8 ">Support</h1>

                <a class="hover:underline text-gray-50" href="FAQ.php">
                    <h1 class="font-light px-14 py-1 mt-1">FAQ</h1>
                </a>
                <a class="hover:underline text-gray-50" href="Help&Support.php">
                    <h1 class="font-light px-14 py-1 mt-1 ">Help & Support</h1>
                </a>
                <a class="hover:underline text-gray-50" href="#newsletter">
                    <h1 class="font-light px-14 py-1 mt-1 ">Our Newsletter</h1>
                </a>
                <a class="hover:underline text-gray-50" id="feed" href="#Feedback">
                    <h1 class="font-light px-14 py-1 pb-6 mt-1">Feedback</h1>
                </a>

            </div>
        </div>
        <div class="pt-3 bg-gray-800 ">

            <p class="pt-10 md:text-center mx-32 font-normal text-center pb-8 md:text-gray-50 text-white">
                Copyright &copy; 2021 All rights Reserved |
                <span class="md:text-indigo-600 font-light">JusticeProperties.com</span>
            </p>
        </div>
    </footer>


</body>

</html>