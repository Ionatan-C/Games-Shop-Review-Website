<?php 
    include "include/config.php";   

    $sql = "SELECT store_locations.location_id, store_info.storename, store_locations.location_city, store_locations.location_address,store_locations.location_county FROM store_locations INNER JOIN store_info ON store_locations.store_id = store_info.storeID";
    
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
  <title>Store Locations</title>
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
                <a class="linkEdit" href="./add_location.php">Add Location</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./products.php">Products</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./store_rating.php">Store Rating</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./login_registration.php">Login/ Register</a>
            </div>
        </div>
    </div>

  <div class="container mt-5">
    <h1 class="text-center">Store Locations</h1>
    <?php
      

      if (mysqli_num_rows($result) > 0){
        echo '<table class="table mt-5">';
        echo '    <thead class="thead-dark">';
        echo '        <tr>';
        echo '        <th scope="col">Store Location ID</th>';
        echo '        <th scope="col">Store Name</th>';
        echo '        <th scope="col">City</th>';
        echo '        <th scope="col">Address</th>';
        echo '        <th scope="col">County</th>';
        echo '        <th scope="col">Action</th>';
        echo '        </tr>';
        echo '   </thead>';
        echo '   <tbody>';

        while ($row = mysqli_fetch_assoc($result)){

          echo '<tr>';
          echo '  <td>'.$row['location_id'] .'</td>';
          echo '  <td>'.$row['storename'] .'</td>';
          echo '  <td>'. $row['location_city'].'</td>';
          echo '  <td>'.$row['location_address'] .'</td>';
          echo '  <td>'.$row['location_county'] .'</td>';
          echo "  <td> <a href='delete_button.php?id=".$row['location_id']."'class='btn btn-danger'>Delete</a></td>";
          echo '</tr>';
          
        }
        echo '</table>';
        
      }
    ?>
  </div>
</body>
</html>