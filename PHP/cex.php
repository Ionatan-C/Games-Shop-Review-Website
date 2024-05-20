<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><!--This links the bootstrap to the html-->
    <link rel="stylesheet" href="../CSS/cex.css"><!--This links the css to the html-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> <!--This links the jQuery liberies to the html-->
    <script src="../JAVASCRIPT/cex.js" type="text/javascript"></script><!--This links javascript to the html-->
    <title>CeX</title>
</head>
<body>
<div class="main">

<!--This allows the user to navigate the website and it links to other webpages-->
    <div class="container navigation">
        <div class="row align-items-start">
            <div class="col text-center bg">
                <a class="linkEdit" href="./index.php">Homepage</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./game.php">GAME Shops</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./about.php">About Us</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./contact.php">Contact Us</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./store_locations.php">Store Locations</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./store_rating.php">Store Rating</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./products.php">Products</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./add_location.php">Add Location</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./login_registration.php">Login/ Register</a>
            </div>
        </div>
    </div>
    <div class="container-1">

        <div class="row justify-content-md-center"> <!--This talks about the product and also allows to user bootstrap to position the content--> 
            <div class="col-lg-3 text-center ">
                <img class="img1" src="../IMAGES/Cex.PNG"> <!--This links the image-->
                <figcaption id="img-label text-center">This is a CeX image</figcaption> <!--This describes the image-->
            </div>
            <div class="col-lg-6 text-center"> <!--This holds all of the text-->
                <p class="imgDescription1">The CeX store is a lot like the GAME store in the way that they both sell games, however the CeX sore prioritise's the price and customer needs before the actual money, as the CeX store  is a lot cheaper then the GAME store sometimes, the CeX store is also for more older people as in not for kids as much as GAME is, this is because there is some waky art within the CeX store and they arent afraid to show all of th waky designs they have which is cool in my opnion, however migh frighten some kids.</p>
            </div>
        </div>

    </div>

    <div class="container-1">

        <div class="row justify-content-md-center">
            <div class="col-lg-3 text-center ">
                <img class="img2" src="../IMAGES/Cex front store.jpg">
                
                <figcaption id="img-label text-center">This is a image of CeX store</figcaption>  <!--The Button and the data that it will load when the button is pressed only works in php as it needs a server as it uses JSON and AJAX to load the data-->

                <button id="btn" style="margin-top: 2%;">Store Info</button>

                <div id="info-box" style="display: none; background-color: #bbb4b4; border-style: solid; margin-top: 2%;"> <!--This uses json to show the info of the shops location-->
                    <div id="info-txt text-center"></div>
                    <div id="info-txt1 text-center" ></div>
                </div>
                <!--past this nothing needs php or anything extra-->
                
            </div>
            <div  class="col-lg-6 text-center"><!--This holds all of the text-->
                <p id="textarea" class="imgDescription2">The CeX store is also know a lot for not only the games but the other items that they sell within the store, such as use or bran new devices and at a cheaper price as well, furthermore the CeX store also allows their customers to sell their own things like games an consoles at a second hand price and give the customers the money's worth for the items that the customer is selling, so between these two stores the GAME and CeX you as the reader can choose which one is bettr for you with all the information that i have given you.</p>
                <div id="feedback"></div>
            </div>
      </div>

    </div> 
    <div class="row btn"> <!--This holds the button that allows the user to go to top-->
        <div class="col text-center">
            <button class="scrollUp">To Top</button>
        </div>
    </div>

    
    <!--This is the jQuery library function allows the scroll to top function to work-->
    <script> 
      $(document).ready(function(){

        $(".scrollUp").click(function(){ //this says when button is clicked then do this

            $("html,body").animate({scrollTop: 0}, 800); // this tells it to use the jQuery library in order to scroll the user up to the top with an animation
            return false;

            });
        });
    </script>
    
</div>    
</body>

</html>