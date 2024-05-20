<!DOCTYPE html>
<html lang="en">
<head> <!--This links everything that that is needed for the webiste to work and look good-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/login.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="../JAVASCRIPT/login.js" type="text/javascript"></script>
    <title>Login</title>
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
        </div>
    </div>
    
    
<?php    //runs a piece of code that gets the input from the user and stores it to a variable and then uses it to connect with the user a little bit more, this is for the login form

        $name = $_POST["name"];

        echo '<p style="color: black; font-size: 40px; text-align: center;">Thank you for logging in '. $name;

        echo "<br><br>";

        echo $name.'<p style="color: black; font-size: 40px; text-align: center;">Feel free to browser our website hope you enjoy';
        
?> 

</body>
</html>