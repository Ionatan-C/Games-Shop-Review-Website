<?php
session_start();
require_once "include/config.php";

// Check if user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login_registration.php");
    exit;
}

// Fetch user's information from database
$user_id = $_SESSION["userID"];
$sql = "SELECT * FROM users WHERE userID = $user_id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/index.css"><!--This links the css to the html-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script><!--This links the jQuery liberies to the html-->
  <script src="../JAVASCRIPT/index.js" type="text/javascript"></script><!--This links javascript to the html-->
  <title>Profile</title>
</head>
<body>

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
                <a class="linkEdit" href="./contact.php">Contact Us</a>
            </div>
			<div class="col text-center bg">
                <a class="linkEdit" href="./store_locations.php">Store Locations</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./add_location.php">Add Location</a>
            </div>
        </div>
    </div>

    <h2 class="text-center">Profile</h2>
    <br><br>
    <div class="container">
        <h2>Welcome, <?php echo $user["userName"]; ?>!</h2>
        <div class="profile">
            <img src="<?php echo $user["profile_pic"]; ?>" alt="Profile Picture" class="img-reponsive">
            <p><strong>Username:</strong> <?php echo $user["userName"]; ?></p>
            <p><strong>Email:</strong> <?php echo $user["email"]; ?></p>
        </div>
        <a href="index.php" class="btn btn-primary">Log Out</a>
    </div>
</body>
</html>

