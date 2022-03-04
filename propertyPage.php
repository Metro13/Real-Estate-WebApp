<?php
 
        require 'class/property.php';
        require 'class/payment.php';
        require 'config.php';
        require 'session.php';  

       
  
    try
    {
        $payments = new payment();
        $property = new property();

        $fetchProperty = $property->fetchAllProperty();

    }
    catch(PDOException $e){
        echo "There was an Error ". $e->getmessage();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,400;0,700;0,900;1,300;1,600;1,700;1,900&display=swap" rel="stylesheet">
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

    <script>
    AOS.init();
    </script>
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
            <?php echo $_SESSION['id']; ?>
        </a>
    </header>

    <!-- Property Display Card -->

    <section class="cards md:pt-12 bg-white">
        <H1 class="text-center md:text-3xl text-xl font-bold text-gray-700 p-4">Available Properties</H1>
        <div class="md:flex grid newFont  md:flex-wrap pl-0 md:justify-center shadow-lg">
            <?php foreach ($fetchProperty as $property){?>
            <div class="card bg-white text-gray-700 mx-2 my-4 p-4 rounded-xl shadow-lg md:w-3/12">
                <img class="mt-1 rounded-lg sm:mt-2 sm:h-64 sm:w-full w-full sm:object-cover object-center"
                    src="properties/images/<?php echo $property->Banner; ?>" alt="">
                <div class="">
                    <h1 class="font-bold mx-6 text-lg p-3">Morden
                        <?php echo $property->PropertyType; ?> House</h1>
                    <span class="flex text-gray-700">
                        <i class="fa fa-map-marker text-indigo-800 text-xl mt-2 p-2 ml-6"></i>
                        <p class="font-normal mt-1 p-2 ml-0"><?php echo $property->Location; ?> ,
                            <?php echo $property->City; ?></p>
                    </span>
                    <span class="flex text-gray-700">
                        <i class="fa fa-money text-indigo-800 text-xl mt-2 p-2 ml-6"></i>
                        <p class="font-medium mt-1 ml-0 p-2 rounded-3xl">Price :
                            $<?php echo $property->Price; ?></p>
                    </span>
                    <p class="font-normal ml-11 p-1 pb-3">Equivalent to : Mwk<?php 
                         $getLocalCurrency = $payments->ConvertCurrency($property->Price);
                         echo $getLocalCurrency;

                    ?></p>

                    <!-- Property Checkout Div -->
                    <form action="checkout.php" class="mx-8" method="post">
                        <input type="hidden" name="pid" id="pid" value="<?php echo $property->PropertyID;?>">
                        <input type="submit" value="Buy"
                            class=" bg-indigo-600 hover:bg-indigo-800  text-white text-base font-semibold px-2 w-28 py-2 rounded-lg">
                    </form>
                </div>
                
            </div>
            <?php }?>
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
        <div class="bg-gray-800 md:my-0 md:flex md:flex-row grid  ">
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
        <div class="pt-3 bg-gray-800 ">

            <p class="pt-10 md:text-center mx-32 font-normal text-center pb-8 md:text-gray-50 text-white">
                Copyright &copy; 2021 All rights Reserved |
                <span class="text-indigo-700 font-light">JusticeProperties.com</span>
            </p>
        </div>
    </footer>
</body>

</html>