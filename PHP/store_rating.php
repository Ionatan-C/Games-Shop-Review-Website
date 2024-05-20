<?php 
    include "include/config.php";   

    $sql = "SELECT  store_info.storename, store_rating.store_location_id, store_rating.rating_id ,store_rating.rating_score,  store_locations.location_city, store_locations.location_address FROM store_rating INNER JOIN store_info ON store_rating.store_id = store_info.storeID INNER JOIN store_locations ON store_rating.store_location_id = store_locations.location_id";
    
    $result = mysqli_query($conn, $sql);
    
    $secondSQL = "SELECT * FROM store_rating";
    $secondResult = mysqli_query($conn, $secondSQL);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ratingID = $_POST["scoreID"];
        $scoreRating = $_POST["Score_Rating"];


        $secondSQL = "UPDATE store_rating
        SET rating_score = '$scoreRating'
        WHERE rating_id = '$ratingID';";
        $secondResult = mysqli_query($conn, $secondSQL);


        if ($secondSQL) {

            header('Location: store_rating.php');
                
        } else {
            echo "Error adding book: " . mysqli_error($conn);
        }
   
    }
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
  <title>Store Rating</title>
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

    <div class="container mt-5">
        <h1 class="text-center">Store Rating</h1>
        <?php
        if (mysqli_num_rows($result) > 0){
            echo '<table class="table mt-5">';
            echo '    <thead class="thead-dark">';
            echo '        <tr>';
            echo '        <th scope="col">ID</th>';
            echo '        <th scope="col">Location ID</th>';
            echo '        <th scope="col">Store Name</th>';
            echo '        <th scope="col">Store Rating</th>';   
            echo '        <th scope="col">Address</th>';
            echo '        <th scope="col">City</th>';
            echo '        <th scope="col">Action</th>';
            echo '        </tr>';
            echo '   </thead>';
            echo '   <tbody>';

            while ($row = mysqli_fetch_assoc($result)){

                echo '<tr>';
                echo '  <td>'.$row['rating_id'] .'</td>';
                echo '  <td>'.$row['store_location_id'] .'</td>';
                echo '  <td>'. $row['storename'].'</td>';
                echo '  <td>'.$row['rating_score'] .'</td>';
                echo '  <td>'.$row['location_address'] .'</td>';
                echo '  <td>'.$row['location_city'] .'</td>';
                echo "  <td> <a href='delete_button.php?id=".$row['rating_id']."'class='btn btn-danger'>Delete</a></td>";
                echo '</tr>';
            }
            echo '</table>';
            
        }
        ?>
    </div>
    <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Add Location</h1>
				<form method="POST">
                    <div class="form-group">
						<label for="Score_Rating">Score Rating:</label>
						<input type="text" class="form-control" id="Score_Rating" name="Score_Rating" required>
					</div>
					<div class="form-group">
						<label for="scoreID">ID:</label>
						<input placeholder="Type in ID of the store you want to change" type="text" class="form-control" id="scoreID" name="scoreID" required>
					</div>
					<button type="submit" class="btn btn-primary">Update Rating</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>