<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><!--This links the bootstrap to the html-->
    <link rel="stylesheet" href="../CSS/about.css"><!--This links the css to the html-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script><!--This links the jQuery liberies to the html-->
    <script src="../JAVASCRIPT/about.js" type="text/javascript"></script><!--This links javascript to the html-->
    <title>About Us</title>
</head>
<body>
    <!--This links the google API to the websit-->
    <script async 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgIDq2-0GowEPbnqt2bgmyW-9EmpWUqc0&callback=initMap">
    </script>

<script>
//this sets the google map within the html using the google maps API
function initMap(){ 
        var options = {
            zoom:8,
            center:{lat:52.1936,lng:-2.2216}
        }
        var map = new google.maps.Map(document.getElementById("map"), options);
    }

</script>

    <!--This is the jQuery library function allows the scroll to top function to work-->
    <script> 
        $(document).ready(function(){
  
          $(".scrollUp").click(function(){ //this says when button is clicked then do this
  
              $("html,body").animate({scrollTop: 0}, 800); // this tells it to use the jQuery library in order to scroll the user up to the top with an animation
              return false;
  
              });
          });
      </script>

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
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-3 text-center ">
                <img class="img1" src="../IMAGES/University img.jpg"><!--This links the image-->
                <figcaption id="img-label">This is a image of the University</figcaption>
            </div>
            <div class="col-lg-8 text-center">
                <p class="imgDescription1">I am a student at the University of Worcester, i have made this website in order to compare the two very popular game stores as I am extremely passionate about gaming in general, that is the reason that I have chosen to talk about this topic and make a website about it, the GAME shop and CeX shop are both located in Worcester as there is a map below that will show the city and if zoomed in then you will be able to see the cex store as well as the game store, and those are the two stores that will be reviewed in this website.</p>
            </div>
        </div>

        <div class="row justify-content-md-center">

            <div class="row align-items-start"><!--This is the div that the map is attached to and will be used to appear-->
                <div id="map"></div>
            </div>
           
        </div>
        <div class="text-center">
            <figcaption id="img-label">This is a Map</figcaption>
        </div>

  </div>

    <div class="row btn"><!--This holds the button that allows the user to go to top-->
        <div class="col text-center">
            <button class="scrollUp">To Top</button>
        </div>
    </div>
  
</div>

    
</body>
</html>