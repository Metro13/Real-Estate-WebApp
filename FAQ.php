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
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="dist/air-slider.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/5416c66261.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <title>Justice Properties</title>
</head>
<body class="newFont">

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


    <section class="bg-gray-800 text-white content">
        <div class="p-8 rounded-2xl">
            <h1 class="text-center md:text-3xl text-2xl p-4 font-black text-white">Frequently Asked Questions</h1>
            <p class="text-center font-light px-20 pb-10">These are the Questions that are Frequently asked by different clients with the Best possible answers from our team. If the Question you have 
                has no answers be free to contact us and we will answer..
            </p>
        <div class="md:grid md:grid-cols-2 text-white">
            <div class="col-start-1 row-start-1 p-8 bg-gray-800">
                <h1 class="font-bold">How many homes should I view before buying one?</h1>
                <p class="font-light">That’s up to you! For sure, home shopping today is easier today than ever before. The ability to search for homes online and see pictures, even before setting a foot outside the comfort of your living room,
                 has completely changed the home buying game. Convenience is at an all-time high</p>
            </div>
            <div class="col-start-2 row-start-1 p-8 bg-gray-800">
            <h1 class="font-bold">What determines the price of a property?</h1>
                <p class="font-light">There are several factors to take into consideration but it tends to come down to the price someone is willing to pay at any one time. The best indicator of value is what similar properties have recently sold for and similar properties that are currently on the market.
                economic stability and how much property is available all contribute to the supply and demand price expectation.</p>
            </div>
            <div class="col-start-1 row-start-2 p-8 bg-gray-800">
            <h1 class="font-bold">What is a Real Estate Broker, and how does it differ from a real estate agent?</h1>
                <p class="font-light">A real estate broker is an agent who is authorized to open and run his/her own agency. All real estate offices must, by law, have one principal broker. A seller’s agent is a real estate agent that works solely on behalf of the seller and owes duties to the seller, which include utmost good faith, loyalty, and fidelity. However, the agent must disclose to potential buyers all
                 adverse material facts about the property, which are actually known by the broker.</p>
            </div>
            <div class="col-start-2 row-start-2 p-8 bg-gray-800">
            <h1 class="font-bold">How long does the listing agreement last?</h1>
                <p class="font-light">When it comes to the length of a listing agreement, every real estate agent will have a different preferred length.  One thing to keep in mind about the length of a listing agreement
                 is the average days on the market.</p>
            </div>
            <div class="col-start-1 row-start-3 p-8 bg-gray-800">
            <h1 class="font-bold">Are payments made on this website secure?</h1>
                <p class="font-light">Pyaments made on this website are secured by Paypal and we verify the transaction details before accepting the payment in our system.</p>
            </div>
            <div class="col-start-2 row-start-3 p-8 bg-gray-000">
            <h1 class="font-bold">How much do you charge on Commission?</h1>
                <p class="font-light">Commissions at our Organisation don't have a fixed Price. This means that we discuss the Commission with the Owner before listing the properties in our system.</p>
            </div>
        </div>
        </div>
        
    </section>

    <!----Footer Section----->

    <footer class="mt-2 newFont " id="footer">
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
                <a class="hover:underline text-gray-50" href="#Feedback">
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