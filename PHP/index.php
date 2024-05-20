<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><!--This links the bootstrap to the html-->
    <link rel="stylesheet" href="../CSS/index.css"><!--This links the css to the html-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script><!--This links the jQuery liberies to the html-->
    <script src="../JAVASCRIPT/index.js" type="text/javascript"></script><!--This links javascript to the html-->
    <title>Homepage</title>
</head>

<body>

    <!--This allows the user to navigate the website and it links to other webpages-->
    <div class="container navigation">
        <div class="row align-items-start">
            <div class="col text-center bg">
                <a class="linkEdit" href="./cex.php">CeX Shops</a>
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


    <div class="d-flex text-center vw-100 justify-content-evenly"> <!--This allows me to control everything within the div like the background colour and text size and position-->
        <div class="col-5">
            <div class="">
                <div class="">
                    <h2 class="titles">
                        CeX
                    </h2>
                </div>
                <a href="./cex.php"><img class="img" src="../IMAGES/Cex.PNG"></a><!--This links the image-->
                <figcaption id="img-label">This is a CeX image</figcaption>
                <p class="imgDescription">This CeX store is one of the most known stores that sells games as well as game accessories and consoles along with some other products that will be talked about more within the CeX page, the review is also within the CeX page, where there will be information on the CeX store as well as my personal oppinion.</p>
            </div>
        </div>
        <div class="col-5">
                <div class="">
                    <h2 class="titles">
                        GAME
                    </h2>
                </div>
            <a href="./game.php"><img class="img" src="../IMAGES/game.PNG"></a><!--This links the image-->
            <figcaption id="img-label">This is a GAME image</figcaption>
            <p class="imgDescription">This is the GAME store, now this store also as given by the name sells games as well as accessories and consoles and some other products, this store definetly competes with the CeX store and within this website there will be my own opinion on the two stores and talking about the differences and which one is better, as said above the rest of the information on the GAME store will be on the GAME store page.</p>
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


</body>


</html>