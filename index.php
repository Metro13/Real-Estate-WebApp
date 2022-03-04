<?php
 

        require 'class/property.php';
        require 'class/payment.php';
        require 'config.php';
        require 'session.php';  

        $newProperty = 6;
  
    try
    {
        $payments = new payment();
     
        $property = new property();

        $fetchProperty = $property->fetchProperty($newProperty);

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
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,400;0,700;0,900;1,300;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="dist/air-slider.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/5416c66261.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/air-slider.min.js"></script>
    <script src="js/main.js"></script>



    <title>Justice Properties</title>
</head>

<body class="antialised bg-white newFont">

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
                <a href="#"
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

    <script>
    AOS.init();
    </script>

    <div
        class="p-14 py-8 max-w-m mx-auto sm:max-w-xl md:hidden newFont text-center bg-gradient-to-r from-blue-500 to-indigo-700">

        <img class="mt-6 rounded-lg shadow-xl sm:mt-8 sm:h-64 sm:w-full w-full sm:object-cover object-center"
            src="properties/images/nyambadwe1.jpg" alt="">
        <h1 class="mt-6 text-2xl font-black text-white sm:mt-8 sm:text-4xl">
            Welcome to Justice Properties
        </h1>
        <p class="mt-2 text-white font-light sm:mt-4 sm:text-xl py-4">
            Buy Properties where ever you are with us today.
            We care about our Clients and Transparency our Priority with you..
        </p>

    </div>


    <!-- Banner Display Div -->
    <section class="slide md:block hidden">
        <div class="air-slider">
            <div class="slide">
                <img class="sm:h-64 sm:w-full sm:object-cover object-center" src="banner/banner-2.PNG" alt="Banner 2" />
            </div>
            <div class="slide">
                <img class="sm:h-64 sm:w-full sm:object-cover object-center" src="banner/banner-3.PNG" alt="Banner 3" />

            </div>
            <div class="slide">
                <img class="sm:h-64 sm:w-full sm:object-cover object-center" src="banner/banner-4.PNG" alt="Banner 4" />
            </div>
            <div class="slide">
                <img class="sm:h-64 sm:w-full sm:object-cover object-center" src="banner/banner-5.PNG" alt="Banner 5" />

            </div>
        </div>

        <script src="js/air-slider.min.js"></script>
        <script>
        var slider = new airSlider({
            autoPlay: true,
            autoPlayTime: 5000,
            width: '1500px',
            height: '450px'

        });
        </script>
    </section>


    <!--- Search Bar--->

    <section class="search lg:mx-0 ">
        <div data-aos="zoom-in" class="lg:flex grid-cols-1 lg:my-2 lg:bg-white bg-white">

            <div class="lg:bg-white md:bg-white  lg:text-gray-700 md:text-gray-700 text-white w-full grid-cols-1">

                <div class="lg:col-start-1 lg:row-start-1  lg:pt-0 pt-10">
                    <h1 class="lg:text-3xl hidden text-xl font-black pt-4 text-center">Search</h1>
                    <h1 class="lg:tex-base mx-7 text-base lg:hidden sm:block text-gray-700 font-light pb-1 text-center">
                        Where would you rather live?
                        Search for properties here based on your desired location</h1>
                    <form class="mb-0 lg:space-y-6 form" method="POST">
                        <div class="lg::mx-10 mx-10 text-gray-700 lg:pt-12 py-4 lg:pb-8 text-center ">
                            <input type="text"
                                class="lg:w-6/12 w-full text-lg mr-4 border border-gray-300 px-3 py-1 mb-4 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600 focus:ring-5 focus:ring-indigo-700 font-light"
                                name="searchText" id="searchText" placeholder="Search by Location e.g. Blantyre">
                            <input type="button" name="Search" id="Search" value="Search"
                                class="lg:bg-indigo-600 lg:text-white hover:bg-indigo-900 hover:text-white font-semibold px-8 lg:py-2 py-2 mb-4 rounded-lg">

                        </div>
                    </form>
                    <div class="md:flex grid newFont md:flex-wrap pl-0 md:justify-center shadow-sm" id="results"></div>
                </div>
            </div>

        </div>


    </section>


    <!------- Services Section------->

    <section data-aos="fade-up" id="services">
        <h1 class="text-center text-gray-500 md:text-2xl text-xl font-black p-2">Services</h1>
        <div class="bg-white lg:grid mt-1 lg:p-10 p-4 text-center text-white lg:grid-cols-3">

            <div class="col-start-1 lg:rounded-md mx-4 bg-gradient-to-r from-blue-400 to-indigo-500 p-10 row-start-1">
                <img class="m-auto bg-gray-500 p-2 rounded-lg" src="images/icons8_card_payment_70px.png"
                    alt="payment icon">
                <h1 class="text-xl font-semibold p-2">Property Broking</h1>
                <p class="p-2">We advertise and Sell properties on behalf of our clients on agreed terms which needs to
                    be met after the property has been sold.</p>
            </div>
            <div class="col-start-2 lg:rounded-md mx-4 bg-gradient-to-r from-blue-400 to-indigo-500 p-10 row-start-1">
                <img class="m-auto bg-gray-500 p-2 rounded-lg" src="images/icons8_building_70px.png"
                    alt="building icon">
                <h1 class="text-xl font-semibold p-2">Property Management</h1>
                <p class="p-2">We manage properties by renting or leasing out to different clients and manage the
                    payments on behalf of our clients.</p>
            </div>
            <div class="col-start-3 lg:rounded-md mx-4 bg-gradient-to-r from-blue-400 to-indigo-500 p-10 row-start-1">
                <img class="m-auto  bg-gray-500 p-2 rounded-lg" src="images/icons8_expensive_price_70px.png"
                    alt="valuation icon">
                <h1 class="text-xl font-semibold  p-2">Property Valuation</h1>
                <p class="p-2">We do property Valuation determine the value the value of land and properties and advise
                    on how you can increase the value of the property</p>
            </div>
        </div>
    </section>

    
     <!------- Ajax for Live searching-->
     <script>
    $(document).ready(function() {
        $('#searchText').keyup(function() {
            var searchText = $('#searchText').val();
            if (searchText == '') {


            } else {
                $('#results').html('');
                $.ajax({
                    url: "fetchData.php",
                    method: "POST",
                    data: {
                        lookup: searchText
                    },
                    dataType: "json",
                    encode: true,
                    success: function(data) {
                        try {
                            if (data) {
                                console.log(data);

                                // Appending the returned data to HTML styled structure
                                var htmlText = data.Property.map(function(o) {
                                    return `
                                    <div class="card bg-white text-gray-700 lg:mx-2 mx-8 my-4 lg:p-4 p-16 rounded-xl shadow-lg lg:w-3/12">
                                    <img class="mt-1 rounded-lg sm:mt-2 sm:h-64 sm:w-full w-full sm:object-cover object-center"
                                    src="properties/images/${o.Banner}" alt="">
                                    <div class="">
                                        <h1 class="font-bold mx-6 text-lg p-3">Morden ${o.PropertyType} House</h1>
                                        <span class="flex text-gray-700">
                                            <i class="fa fa-map-marker text-indigo-500 text-xl mt-2 p-2 ml-6"></i>
                                            <p class="font-normal mt-1 p-2 ml-0"> ${o.Location} ,
                                            ${o.City}</p>
                                        </span>
                                        <span class="flex text-gray-700">
                                            <i class="fa fa-money text-indigo-500 text-xl mt-2 p-2 ml-6"></i>
                                            <p class="font-medium mt-1 ml-0 p-2 rounded-3xl">Price :
                                                $${o.Price}</p>
                                                
                                        </span>
                                
                                        <!-- Property Checkout Div -->
                                        <form action="checkout.php" class="mx-8" method="post">
                                            <input type="hidden" name="pid" id="pid" value="${o.PropertyID}">
                                            <input type="submit" value="Buy"
                                                class="bg-indigo-500 hover:bg-indigo-700 text-white text-base font-semibold px-2 w-28 py-2 rounded-lg">
                                        </form>
                                        
                                    </div>
                                    
                                    </div>
                                </div>
                             `;
                                });

                                $('#results').append(htmlText);

                            }
                        } catch (error) {
                            $('#results').html(error.message + "");
                        }

                    }

                });
            }
        });
    });
    </script>


    <!-- Property Display Card -->

    <section data-aos="fade-up" class="cards bg-white">
        <h1 class="text-center  text-gray-500 lg:text-2xl text-xl font-black p-4">Featured Properties</h1>
        <div class="lg:flex grid newFont  lg:flex-wrap pl-0 md:justify-center shadow-sm">
            <?php foreach ($fetchProperty as $property){?>
            <div class="card bg-white text-gray-700 lg:mx-2 mx-8 my-4 lg:p-4 px-16 py-5 rounded-xl shadow-lg lg:w-3/12">
                <img class="mt-1 rounded-lg sm:mt-2 sm:h-64 sm:w-full w-full sm:object-cover object-center"
                    src="properties/images/<?php echo $property->Banner; ?>" alt="">
                <div class="">
                    <h1 class="font-bold mx-6 text-lg p-3">
                        <?php echo $property->PropertyType; ?> House</h1>
                    <span class="flex text-gray-700">
                        <i class="fa fa-map-marker text-indigo-500 text-xl mt-2 p-2 ml-6"></i>
                        <p class="font-normal mt-1 p-2 ml-0"><?php echo $property->Location; ?> ,
                            <?php echo $property->City; ?></p>
                    </span>
                    <span class="flex text-gray-700">
                        <i class="fa fa-money text-indigo-500 text-xl mt-2 p-2 ml-6"></i>
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
                            class="bg-indigo-500 hover:bg-indigo-700 text-white text-base font-semibold px-2 w-28 py-2 rounded-lg">
                    </form>

                </div>


            </div>
            <?php }?>


        </div>


    </section>

    <div class="mt-4 text-center px-2 py-4 ">
        <a class="bg-indigo-500 hover:bg-indigo-700 text-white text-base font-semibold px-6 py-2 rounded-lg"
            href="propertyPage.php">View more</a>
    </div>

    <!----- Company stats----->

    <section data-aos="fade-up"
        class="sm:mt-0 lg:mt-4 lg:mx-10 mx-4 rounded-lg text-white bg-gradient-to-r from-blue-600 to-indigo-800 newFont recom">

        <h1 class="text-center lg:text-2xl text-xl font-black p-2 pb-2 pt-16">Trusted by different clients all over
            malawi
        </h1>
        <p class="text-center text-lg font-light">Be part of justice properties and buy properties online</p>

        <div class="lg:flex lg:mx-32 lg:px-20 lg:pb-20 lg:pt-4">

            <div class="text-center p-6 lg:w-3/12 rect">
                <h1 id="counter" class="text-center font-black pb-2 text-4xl">1000</h1>
                <p class="text-center font-light">Registered clients</p>
            </div>
            <div class="lg:w-3/12 p-6 rect">
                <h1 id="counter" class="font-black text-4xl pb-2 text-center">500</h1>
                <p class="text-center font-light">Listed properties</p>
            </div>
            <div class="lg:w-3/12 p-6 rect">
                <span class="flex rect justify-center">
                    <h1 id="counter" class="text-center text-4xl pb-2 font-black ">100</h1>
                    <p class="text-4xl font-black">%</p>
                </span>
                <p class="text-center font-light">Paypal safety Transaction guarantee</p>
            </div>
            <div class="lg:w-3/12 p-6 rect">
                <span class="flex rect justify-center">
                    <h1 class="font-black text-center pb-2 text-4xl">12</h1>
                    <h2 class="font-black text-4xl">Hrs</h2>
                </span>
                <h2 class="text-center font-light">Help & Support</h2>
            </div>
        </div>



    </section>



    <!---Team section-->
    <section data-aos="fade-up" class="cards bg-white mx-4 text-gray-700 rounded-xl md:p-10">
        <h1 class="text-center text-gray-500 lg:text-2xl text-xl font-black p-4 ">Our Agents</h1>
        <div class="lg:flex lg:flex-row card justify-center bg-white">

            <div class="lg:w-3/12 lg:p-10 p-5 pb-0">
                <img src="images/female 2.png" class=" m-auto h-56 w-56 rounded-2xl" alt="agents">
                <h1 class="text-xl font-bold text-center px-4 pt-1">Sarah Silowe</h1>
                <p class="font-normal text-center p-4">Company Manager</p>
            </div>
            <div class="lg:w-3/12 lg:p-10 p-5 pb-0">
                <img src="images/IMG1.png" class=" h-56 w-56 m-auto rounded-2xl shadow-md" alt="agents">
                <h1 class="text-xl font-bold text-center px-4 pt-2">Martin Ziyuwe</h1>
                <p class="font-normal text-center p-4">Property Agent</p>
            </div>
            <div class="lg:w-3/12 lg:p-10 p-5 pb-0">
                <img src="images/IMG2.png" class="object-cover m-auto h-56 w-56 rounded-2xl shadow-md" alt="agents">
                <h1 class="text-xl text-center font-bold px-4 pt-2">Lifred Banda</h1>
                <p class="font-normal text-center p-4">system Administrator</p>
            </div>
            <div class="lg:w-3/12 lg:p-10 p-5 pb-0">
                <img src="images/IMG3.png" class="h-56 w-56 object-cover m-auto rounded-2xl shadow-md" alt="agents">
                <h1 class="text-xl text-center font-bold px-4 pt-2">Frank Nkosi</h1>
                <p class="font-normal text-center p-4">Financial Accountant</p>
            </div>

        </div>
    </section>


    <!---Newsletter subscription-->

    <section data-aos="fade-right" id="newsletter" class="mt-2 newFont">

        <div class=" grid grid-cols-1 bg-gradient-to-r from-blue-500 to-indigo-700 rounded-2xl sm:grid-cols-2 mx-4">
            <div class="col-start-1 row-start-1 md:py-0 py-4 ">
                <h1 class="mx-20 pt-16 pb-4 text-2xl font-black text-white">Sign up for our newsletter</h1>
                <p class=" mx-20 md:pb-16 pb-6 font-light text-white">Recieve news, updates and information about
                    Justice properties.
                    Be notified about new property Listings and new details.</p>
            </div>
            <div
                class="lg:col-start-2 lg:row-start-1 col-start-1 lg:pt-0 pt-10 pb-4 md:bg-white bg-gray-800 text-gray-600">
                <form class="mb-0 md:space-y-6 form" method="POST" ">
                  <div class=" lg:mx-10 mx-10 lg:pt-24 lg:pb-4 text-center ">
                    <input type=" email"
                    class="lg:w-8/12 w-full text-lg mr-4 border border-gray-300 px-3 py-1 mb-4 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600 focus:ring-2 focus:bg-indigo-500 font-normal"
                    name="subEmail" id="subEmail" required placeholder="Enter email Address">
                    <input type="button" name="Submit" id="Submit" value="Notify me"
                        class="bg-indigo-700 hover:bg-indigo-900 text-white text-base font-semibold px-6 md:py-2 py-2 mb-4 rounded-lg">
            </div>

            </form>
            <p class="text-gray-600 pt-0 mx-16 mb-8 md:block hidden font-light">We care about your Experience with us...
            </p>
            <div id="error" class="text-center p-1 mx-16 font-medium text-red-600"></div>

        </div>

        </div>

    </section>

    <!---- Newsletter subcription Javascript---->

    <script>
    $(document).ready(function() {

        $('#Submit').click(function() {

            var email = $('#subEmail').val();
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

            if ($.trim(email).length > 0)

            {
                if (!emailReg.test(email)) {
                    $('#error').html("Please, Enter a Valid Email Address");
                } else {
                    $.ajax({
                        url: "subscription.php",
                        method: "POST",
                        data: {
                            email: email
                        },
                        cache: false,
                        beforeSend: function() {
                            $('#viewSubmit').val("Subscribing..");
                        },
                        success: function(data) {
                            if (!data) {
                                window.alert("Subscription Successfull");

                            } else {
                                $('#error').html(
                                    "Sorry there was an Error, the email is already in use. chooose a different one"
                                );

                            }
                        }
                    });

                }

            } else {

                $('#error').html("Please, Enter your Email Address to proceed");
                return false;
            }

        });


    });
    </script>

    <!------ Advert banner------>

    <div data-aos="fade-up" class="p-16 text-white lg:flex">
        <div class="lg:w-8/12 w-full bg-gray-800">
            <img class=" object-contain" src="properties/images/4212.jpg" alt="base property">
        </div>
        <div class="w-full bg-gradient-to-r from-blue-400 to-indigo-500">
            <h1 class="text-3xl lg:pt-28 pt-16 text-center font-black justify-items-center">Looking forward to sell your
                Property?</h1>
            <p class="text-center pt-2 px-16">Contact us today to get your property listed and get fair deals on it
                while you are
                home doing other stuff.</p>
            <p class="text-center pt-1 px-16">We care about your Experience with us feel free to reach out to us for any
                inquiries and feedback.</p>
            <div class="mt-4 text-center px-2 lg:py-4 p-8">
                <a class="bg-white hover:bg-indigo-500 hover:text-white text-gray-700 text-base font-semibold px-6 py-2 rounded-lg"
                    href="#contact">Contact us</a>
            </div>
        </div>

    </div>


    <!---contact us form-->
    <section data-aos="zoom-in" id="contact" class="lg:mt-2 mt-0 mx-4 newFont">

        <div class="rounded-3xl lg:mx-0 lg:my-0 grid lg:grid-cols-2 text-white bg-white shadow-lg grid-cols-1">

            <!---contact information-->
            <div class="bg-gray-800">
                <h2 class="mx-20 pt-16 pb-4 text-2xl font-black text-white">Contact information</h3>
                    <p class="mx-20 lg:pb-10 text-lg pb-6 font-light text-white">Contact us for any Queries, Complaints
                        and
                        Suggestions or anything you feel like we should know e.g. your Feedback on our Services</p>

                    <div class="p-4 lg:flex flex">
                        <img class="h-7 lg:ml-20 ml-16 mr-5 " src="images/gmail.png" alt="email icon">
                        <p class="lg:ml-10 mr-10 ml-15 md:pb-6 text-lg pb-6 font-light text-white">
                            JusticeProperties@gmail.com
                        </p>
                    </div>

                    <div class="mt-2 p-4 lg:flex flex">
                        <img class=" h-7 lg:ml-20 ml-16 mr-5" src="images/call.png" alt="phone icon">
                        <p class="md:ml-10 ml-15 lg:pb-6 text-lg  pb-6 font-light text-white">+265 995-739-805 / +265
                            996-873-073</p>
                    </div>
                    <div class=" mx-32 mb-7 text-center">

                        <!--- cdn icons--->
                        <span class=" text-2xl">
                            <i class="fa fa-facebook  hover:text-pink-300 mr-6 transition duration-500 ease-in-out"></i>
                            <i class="fa fa-twitter mr-6 hover:text-pink-300 transition duration-500 ease-in-out"></i>
                            <i class="fa fa-instagram mr-6 hover:text-pink-300 transition duration-500 ease-in-out"></i>
                            <i class="fa fa-pinterest mr-6 hover:text-pink-300 transition duration-500 ease-in-out"></i>
                        </span>
                    </div>
            </div>
            <div class="lg:mx-32 mx-10 newFont">

                <h2 class="mx-20 pt-16 pb-4 text-2xl text-center font-bold text-gray-900">send us a message...</h3>
                    <form class="mb-0 space-y-6 text-black" action="contacts.php" method="POST">
                        <div>
                            <label class="block lg:text-lg text-base font-semibold" for="firstname">
                                Firstname
                            </label>
                            <div class="mt-1">
                                <input placeholder="enter firstname" type="text" required name="fname" id="fname"
                                    class=" font-normal w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600">
                            </div>
                        </div>

                        <div>
                            <label class="block lg:text-lg text-base font-semibold" for="lastname">
                                Lastname
                            </label>
                            <div class="mt-1">
                                <input placeholder="enter lastname"
                                    class="w-full border border-gray-300 font-normal px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600"
                                    type="text" required name="lname" id="lname">
                            </div>
                        </div>

                        <div>
                            <label class="block lg:text-lg text-base font-semibold " for="email Address">
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
                                <label class="block lg:text-lg text-base font-semibold " for="subject">
                                    Subject
                                </label>
                                <div class="mt-1">
                                    <input placeholder="enter message subject"
                                        class="w-full border font-normal border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600"
                                        type="text" required name="subject" id="subject">
                                </div>
                            </div>


                            <div>
                                <label class="block lg:text-lg text-base font-semibold mt-4 " for="message">
                                    Message
                                </label>
                                <div class="mt-1">
                                    <textarea placeholder="enter your message here"
                                        class="w-full border font-normal border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600"
                                        type="text" required name="message" id="message"></textarea>
                                </div>
                            </div>

                            <div class="py-6 grid grid-cols-2">
                                <div class="lg:row-start-1 lg:col-start-2 ">
                                    <input type="submit" value="Submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white 
                                 bg-indigo-700 hover:bg-indigo-900">
                                </div>

                            </div>

                    </form>
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
        <div class="bg-gray-900 md:my-0 lg:flex lg:flex-row grid  ">
            <div class=" lg:w-4/6 px-16">
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
                    <span class=" text-2xl text-gray-200 ">
                        <i class="fa fa-facebook hover:text-pink-500 mr-7 transition duration-500 ease-in-out"></i>
                        <i class="fa fa-twitter mr-7 hover:text-pink-500 transition duration-500 ease-in-out"></i>
                        <i class="fa fa-instagram mr-7 hover:text-pink-500 transition duration-500 ease-in-out"></i>
                        <i class="fa fa-pinterest mr-7 hover:text-pink-500 transition duration-500 ease-in-out"></i>
                    </span>
                </div>

            </div>
            <div class="lg:w-3/6 text-gray-50 px-16">
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
            <div class="lg:w-3/6 text-gray-50 px-16">
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
                <span class="text-indigo-700 font-light">JusticeProperties.com</span>
            </p>
        </div>
    </footer>

</body>

</html>