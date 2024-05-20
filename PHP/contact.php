<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!--This links the bootstrap to the html-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script><!--This links the jQuery liberies to the html-->
    <link rel="stylesheet" href="../CSS/contact.css"><!--This links the css to the html-->
    <script src="../JAVASCRIPT/contact.js" type="text/javascript"></script><!--This links javascript to the html-->
    <title>Contact Us</title>
</head>

<body>

    <!--This allows the user to navigate the website and it links to other webpages-->
    <div class="container navigation">
        <div class="row align-items-start">
            <div class="col text-center bg">
                <a class="linkEdit" href="./index.php">Homepage</a>
            </div>
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

    <div class="Main"> <!--This allows me to control everything within the div like the background colour and text size and position-->
        <form id="form">
            <p id="email1" class="message email hidden"></p>
            <p id="name1" class="message name hidden"></p>
            <p id="enquiry1" class="message enquiry hidden"></p>

            <h1 class="align" id="colour">Contact Us Form</h1>
            <br>
            <label class="align"  id="name1" for="Name">Full Name:</label><br> <!--This is "break" which is going dow a line per every <br> -->  <!--This is the label which will say Full Name-->
            <input class="align"  type="text" id="name" name="name" placeholder="Type your full name here..">

            <br><br> <!--This is "break" which is going dow a line per every <br> -->

            <label class="align"  id="email1" for="email">Email:</label><br> <!--This is "break" which is going dow a line per every <br> -->  <!--This is the label which will say email-->
            <input class="align"  type="email" id="email" name="email" placeholder="Type your Email here..">

            <br><br> <!--This is "break" which is going dow a line per every <br> -->
            
            <label class="align"  id="type1" for="Type of Enquiry">Type of Enquiry:</label><br> <!--This is "break" which is going dow a line per every <br> -->  <!--This is the label which will say type of enquiry-->
            <select class="align"  id="enquirytype" name="Your enquiry"> <!--This is the selection bar that users will select to select their issue-->
                <option value="Misinformation Issue">Misinformation Issue</option> <!--This is the option that will come out when users click onto the selection bar-->
                <option value="Website Issue">Website Issue</option> <!--This is the option that will come out when users click onto the selection bar-->
                <option value="Other">Other</option> <!--This is the option that will come out when users click onto the selection bar-->
            </select>

            <br><br> <!--This is "break" which is going dow a line per every <br> -->

            <label class="align"  id="enquiry1" for="enquiry">Enquiry:</label><br><!--This is "break" which is going dow a line per every <br> -->  <!--This is the label which will say type of enquiry-->
            <textarea class="align"  id="enquiry" name="Enquiry" placeholder="Type your Issue here.." ></textarea> <!--This is where users will type their issues-->
            <br><br> <!--This is "break" which is going dow a line per every <br> -->
            <p class="subbtn"><button  type="submit">Submit</button></p> <!--This is the button that users will press to submit the form-->
        </form>
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