<?php 
    include "include/config.php";   

    $sql = "SELECT  store_info.storename, store_product.productID, store_product.productName, store_product.productType FROM store_product INNER JOIN store_info ON store_product.store_id = store_info.storeID";
    
    $result = mysqli_query($conn, $sql);
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
  <title>Store Products</title>
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
                <a class="linkEdit" href="./store_rating.php">Store Rating</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./add_location.php">Add Location</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./login_registration.php">Login/ Register</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="text-center">Store Products</h1>
        <?php
        if (mysqli_num_rows($result) > 0){
            echo '<table class="table mt-5">';
            echo '    <thead class="thead-dark">';
            echo '        <tr>';
            echo '        <th scope="col">Product ID</th>';
            echo '        <th scope="col">Store Name</th>';
            echo '        <th scope="col">Product Name</th>';   
            echo '        <th scope="col">Product Type</th>';
            echo '        </tr>';
            echo '   </thead>';
            echo '   <tbody>';

            while ($row = mysqli_fetch_assoc($result)){

            echo '<tr>';
            echo '  <td>'.$row['productID'] .'</td>';
            echo '  <td>'.$row['storename'] .'</td>';
            echo '  <td>'. $row['productName'].'</td>';
            echo '  <td>'.$row['productType'] .'</td>';
            echo '</tr>';
            }
            echo '</table>';
            
        }
        ?>
    </div>
</body>
</html>