<?php

require 'config.php';
require 'session.php';
require 'class/property.php';
require 'class/payment.php';

      try {
        $payments = new payment();

        $propid = $_POST['pid'];

        $_SESSION['prpID'] = $propid;
       

          if(isset($propid))
          {
            $property = new property();
            $getproperty = $property->getProperty($propid);
            $getimages = $property->getPropertyImages($propid);
            
          }
        else{
             // header("Location:index.php");
            }
      } catch (PDOException $th) {

        echo "There was an Error ". $th->getmessage();
      }
     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,400;0,700;0,900;1,300;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="dist/air-slider.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/5416c66261.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <link href="dist/style.css" rel="stylesheet">
    <title>Justice Properties</title>

</head>

<body class="antialiased newFont bg-gray-100">
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

    <!-- Property Display Div -->

    <section>
        <div class="BannerSlider" id="BannerSlider">

            <!-- Image slider -->
            <div class="grid grid-cols-1 p-10 bg-white">
                <!-- Property Header information -->
                <div class="bg-white px-20 py-8 text-gray-700">
                    <h1 class="text-4xl font-bold py-6 "><?php echo $getproperty->PropertyType; ?> House in <?php echo $getproperty->City; ?></h1>
                    <div class="md:flex font-sans">
                        <i class="fa fa-map-marker text-gray-800 text-3xl ml-6"></i>
                        <p class="text-xl mx-4 pt-1"><?php echo $getproperty->Location; ?> , <?php echo $getproperty->City; ?></p>
                        <i class="fa fa-money text-gray-800 text-3xl ml-6"></i>
                        <p class="text-xl mx-4 pt-1">$<?php echo $getproperty->Price; ?></p>
                        <p class="text-xl mx-4 pt-1">Equivalent to MWK<?php $getLocalCurrency = $payments->ConvertCurrency($getproperty->Price);
                         echo $getLocalCurrency; ?></p>
                    </div>


                </div>
                <!-- Image slider -->
                <div class="carousel relative bg-white">
                    <div class="carousel-inner relative overflow-hidden w-full">
                        <!--Slide 1-->
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true"
                            hidden="" checked="checked">
                        <div class="carousel-item absolute opacity-0" style="height:80vh; ">
                            <img class="w-full object-cover object-center h-full" src="properties/images/<?php echo $getimages[0][0]; ?>" alt="">
                        </div>
                        <label for="carousel-3"
                            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-2"
                            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 2-->
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
                            hidden="">
                        <div class="carousel-item absolute opacity-0" style="height:80vh;">

                            <img class="w-full object-cover object-center h-full" src="properties/images/<?php echo $getimages[1][0]; ?>" alt="">
                        </div>
                        <label for="carousel-1"
                            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-3"
                            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 3-->
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
                            hidden="">
                        <div class="carousel-item absolute opacity-0" style="height:80vh;">
                            <img class="w-full object-cover object-center h-full" src="properties/images/<?php echo $getimages[2][0]; ?>" alt="">
                        </div>
                        <label for="carousel-2"
                            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-1"
                            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!-- Add additional indicators for each slide-->
                        <ol class="carousel-indicators">
                            <li class="inline-block mr-3">
                                <label for="carousel-1"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-2"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-3"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                        </ol>

                    </div>
                </div>
                <!-- Description -->
                <div class="bg-white md:mx-32">
                    <h1 class="text-center text-3xl font-bold py-4 text-gray-700">Description</h1>
                    <p class="py-4 text-center text-lg"><?php echo $getproperty->Description; ?></p>
                </div>
                <!-- inquiry Toggler -->
                <div class="bg-white py-10 text-center">
                     <?php require 'paypalButton.php'; ?>
                     <div class="py-6">
                     <input id="inquire" type="submit" value="Inquire more"
                            class="bg-indigo-700 hover:bg-indigo-900  text-white text-base font-semibold px-2 w-32 py-2 rounded-lg">
                     </div>
                    
                </div>
                
                <div id="toggle" class="bg-white shadow-lg rounded-xl md:mx-52 py-8 font-sans ">

                <h2 class="mx-20 pt-16 pb-4 text-2xl text-center font-bold text-gray-700">send us your Inquiry...</h3>
                <form class="mb-0 space-y-6 md:mx-32 mx-10 text-gray-700" action="inquiry.php" method="POST">
                        <div>
                            <label class="block text-sm font-medium " for="firstname">
                                Firstname
                            </label>
                            <div class="mt-1">
                                <input placeholder="enter firstname" type="text" required name="fname" id="fname"
                                    class=" font-normal w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium " for="lastname">
                                Lastname
                            </label>
                            <div class="mt-1">
                                <input placeholder="enter lastname"
                                    class="w-full border border-gray-300 font-normal px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600"
                                    type="text" required name="lname" id="lname">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium " for="email Address">
                                Email Address
                            </label>
                            <div class="mt-1">
                                <input placeholder="enter email address"
                                    class="w-full border font-normal border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600"
                                    type="email" autocomplete="email" required name="email" id="email">
                            </div>
                        </div>

                        <div>
                            <div>
                                <label class="block text-sm font-medium mt-4 " for="message">
                                    Message
                                </label>
                                <div class="mt-1">
                                    <textarea placeholder="enter your message here"
                                        class="w-full border font-normal border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600"
                                        type="text" required name="message" id="message"></textarea>
                                </div>
                            </div>

                            <div class="py-6 grid grid-cols-2">
                                <div class="md:row-start-1 md:col-start-2 ">
                                    <input type="submit" value="Submit"
                                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none 
                                focus:border-indigo-600 focus:ring-500 focus:ring-indigo-600 bg-indigo-500 hover:bg-indigo-800">
                                </div>

                            </div>

                    </form>
                </div>
            </div>

        </div>
    </section>
    <style>
    .carousel-open:checked+.carousel-item {
        position: static;
        opacity: 100;
    }

    .carousel-item {
        -webkit-transition: opacity 0.6s ease-out;
        transition: opacity 0.6s ease-out;
    }

    #carousel-1:checked~.control-1,
    #carousel-2:checked~.control-2,
    #carousel-3:checked~.control-3 {
        display: block;
    }

    .carousel-indicators {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        bottom: 2%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 10;
    }

    #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
        color: #2b6cb0;

    }
    </style>    

    <script>
        $(document).ready(function(){
        $('#inquire').click(function(){
            $('#toggle').slideDown("slow");
        });
        });
    </script>

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
                        <i class="fa fa-facebook hover:text-indigo-500 mr-7 transition duration-500 ease-in-out"></i>
                        <i class="fa fa-twitter mr-7 hover:text-indigo-500 transition duration-500 ease-in-out"></i>
                        <i class="fa fa-instagram mr-7 hover:text-indigo-500 transition duration-500 ease-in-out"></i>
                        <i class="fa fa-pinterest mr-7 hover:text-indigo-500 transition duration-500 ease-in-out"></i>
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
                <span class="md:text-indigo-500 font-light">JusticeProperties.com</span>
            </p>
        </div>
    </footer>
</body>

</html>