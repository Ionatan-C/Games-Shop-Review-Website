<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><!--This links the bootstrap to the html-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script><!--This links the jQuery liberies to the html-->
    <link rel="stylesheet" href="../CSS/game.css"><!--This links the css to the html-->
    <script src="../JAVASCRIPT/game.js" type="text/javascript"></script><!--This links javascript to the html-->
    <title>GAME</title>
</head>
<body>


   <!--This allows the user to navigate the website and it links to other webpages-->
    <div class="container navigation">
        <div class="row align-items-start">
            <div class="col text-center bg">
                <a class="linkEdit" href="./index.php">Homepage</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./cex.php">Cex Shops</a>
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

        <div class="row justify-content-md-center"><!--This talks about the product and also allows to user bootstrap to position the content--> 
            <div class="col-lg-3 text-center ">
                <img class="img1" src="../IMAGES/game.PNG"> <!--This links the image-->
                <figcaption id="img-label text-center">This is a GAME image</figcaption>
            </div>
            <div class="col-lg-6 text-center">
                <p class="imgDescription1">The Game store is one of the most popular store for games in the whole of UK (United Kingdom), this is because of heir servecies and how they are able to sell games as soon as thee games themselves come out, and as they also allow people to pre-order a game which usually is mostly done online as nrmal stores dont usually allow that however game does and it is one of the reasons why the GAME store is so popular.</p>
            </div>
        </div>

    </div>

    <div class="container-1">

        <div class="row justify-content-md-center">
            <div class="col-lg-3 text-center">
                <img class="img2" src="../IMAGES/Game front store.jpg">
                
                <figcaption id="img-label text-center" >This is a image of GAME store</figcaption> <!--The Button and the data that it will load when the button is pressed only works in php as it needs a server as it uses JSON and AJAX to load the data-->
                
                <button id="btn" style="margin-top: 2%;">Store Info</button>

                <div id="info-box" style="display: none; background-color: #bbb4b4; border-style: solid; margin-top: 2%;">
                    <div id="info-txt text-center"></div>
                    <div id="info-txt1 text-center" ></div>
                </div>
                <!--past this nothing needs php or anything extra-->

            </div>
            <div class="col-lg-6 text-center">
                <p class="imgDescription2">Furthermore, the GAME store also sells a lot o game accessories if ts controller skins or addons all the way to actual game products like hoodies in certain shops, as well as figurines, however soem of the downsides of the GAME store is that it is quite expensive and all of the games are usually sold at full price even after release, sometime there may be some cheap ones however it is rare and they are usually older games that arent all that good these days, so in order to shop at GAME you will need to be prepared to spend some decent amount of money.</p>
            </div>
      </div>

    </div> 

    <div class="row btn">
        <div class="col text-center"><!--This holds the button that allows the user to go to top-->
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