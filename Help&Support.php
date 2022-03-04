
<?php 
      require 'config.php';
      require 'session.php';
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
    <link rel="stylesheet" href="dist/air-slider.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/5416c66261.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="js/air-slider.min.js"></script>
    <script src="js/main.js"></script>
    <title>Justice Properties</title>
</head>

<body class="newFont">

    <!----Navigation Section----->

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
            class="lg:ml-4 flex items-center md:pt-0 pt-6 text-gray-700 text-base font-normal justify-start lg:mb-0 mb-4 cursor-pointer">
            <img src="images/icons8_male_user_50px.png" class="w-10 h-10 mr-2 rounded-full" alt="logo">
            <?php
            

             echo $_SESSION['id']; 
             ?>
        </a>
    </header>
    <!----Help Section----->

    <section>
        <div class="">
            <h1 class="md:text-4xl  text-gray-700 text-2xl font-bold text-center md:p-8 p-6">How can we help you?</h1>
        </div>
        <div class="bg-gray-50 md:grid text-center text-white md:grid-cols-3 p-10">
            <div class="col-start-1 p-8 justify-center bg-gray-700 shadow-md row-start-1">
                <img class="m-auto  bg-gray-600 p-2 rounded-lg" src="images/icons8_card_payment_70px.png"
                    alt="card Payment Icon">
                <h1 class="pt-4 pb-2 font-semibold md:text-2xl text-xl">Payment</h1>
                <span class="flex">
                    <p class="font-bold text-base">1.</p>
                    <p class="pb-2 text-base">This site Allows you to pay with your Visa or Direct Paypal. Make sure your
                     account has enough Funds or else the Transaction will be cancelled.</p>
                       
                </span>
                <span class="flex">
                    <p class="font-bold text-base">2.</p>
                    <p class="pb-2 text-base">Make sure you check before you confirm the details of your payment to avoid purchasing the 
                    wrong property.</p>
                       
                </span>
                <span class="flex">
                    <p class="font-bold text-base">3.</p>
                    <p class="pb-2 text-base">We are currently accepting payments made with Visa and Paypal Only. If you are having trouble with payments on this site
                     make sure you contact us or Else it might be the Issure with your Account so you will need to contact your Bank for futher details.</p>
                       
                </span>

            </div>
            <div class="col-start-2 p-8 bg-gray-800 shadow-md row-start-1">
                <img class="m-auto bg-gray-600 p-2 rounded-lg" src="images/icons8_help_70px.png" alt="Help icon">
                <h1 class="pt-4 pb-2 font-semibold md:text-2xl text-xl">Help</h1>
                <span class="flex">
                    <p class="font-bold text-base">1.</p>
                    <p class="pb-2 text-base">When your Account has been Bloked, Attempt to do a recovery and Follow the steps
                    provided for you to safely recover and change your password.</p>            
                </span>
                <span class="flex">
                    <p class="font-bold text-base">2.</p>
                    <p class="pb-2 text-base">We Allow the refund of Payments on certain circumstances. We do not refund money paid to another
                    organisation on this site Except Ours. Make sure you contact as soon as that happens to get assisted Accordingly.</p>            
                </span>
                <span class="flex">
                    <p class="font-bold text-base">3.</p>
                    <p class="pb-2 text-base">We allow our Clients to have a voice on our services. If you have any complaints and Appraisals make sure
                     you let us know to maintain and improve our Current services by Filling the Contact form or giving us feedback below.</p>            
                </span>
            </div>
            <div class="col-start-3 p-8 bg-gray-700 shadow-md row-start-1">
                <img class="m-auto bg-gray-600 p-2 rounded-lg" src="images/icons8_secure_70px.png" alt="security icon">
                <h1 class="pt-4 pb-2 font-semibold md:text-2xl text-xl">Security</h1>
                <span class="flex">
                    <p class="font-bold text-base">1.</p>
                    <p class="pb-2 text-base">Don't send or save your Credit card, Account and Paypal Passwords on this site and your Browser 
                    we will not be accountable for any leak or fraud of your Credentials.</p>            
                </span>
                <span class="flex">
                    <p class="font-bold text-base">2.</p>
                    <p class="pb-2 text-base">Make sure you keep your Transaction Details on any payments you made 
                    on this website. We will use Transaction Reference in order to Complete the Process of handing in your Property after confirming the Authenticity 
                    of your details</p>            
                </span>
                <span class="flex">
                    <p class="font-bold text-base">3.</p>
                    <p class="pb-2 text-base">For security purpose make sure you Keep this site account password safe to prevent delays to access your account when we block your account 
                    due to unsuccessfull Login Trials .</p>            
                </span>
            </div>
        </div>
    </section>

    <!----User Feeback form----->

    <section id="Feed">
        <div id="feedback"
            class="hidden bg-gradient-to-r from-gray-800 to-gray-900 lg:p-12 rounded-3xl text-white md:mx-96 mx-14 mt-4"
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

    <footer class="mt-7 newFont ">
        <div class="bg-gray-900 md:my-0 md:flex md:flex-row grid  ">
            <div class=" md:w-4/6 px-16">
                <div class="mt-8 mx-10 px-14 py-6">
                    <img src="images/logo.png" class="w-16" alt="company logo">
                </div>
                <div class="font-light px-10 text-gray-50">
                    <p>Making property acquisition simpler through buying properties online where ever you are.
                    Justice Property was established in 2009.We are situated in Blantyre opposite KFC. We are Real Estate
                     Agents who Manages and sell properties on your Behalf</p>
                </div>
                <div class="px-10 pt-4 pb-10 ">
                    <!--- Social medial icons-->
                    <span class=" text-2xl text-gray-200 ">
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
        <div class="pt-3 bg-gray-900 ">

            <p class="pt-10 md:text-center mx-32 font-normal text-center pb-8 md:text-gray-50 text-white">
                Copyright &copy; 2021 All rights Reserved |
                <span class="text-indigo-600 font-light">JusticeProperties.com</span>
            </p>
        </div>
    </footer>
</body>

</html>