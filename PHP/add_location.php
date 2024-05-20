
<?php 

include 'include/config.php';


$sql = "SELECT * FROM store_locations";
$result = mysqli_query($conn, $sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ratingID = mt_rand();
	$locationID = mt_rand();
    $scoreRating = $_POST["Score_Rating"];
	$storeID = $_POST["storeID"];
    $City = $_POST["Location_City"];
    $Address = $_POST["Location_Address"];
    $County = $_POST["County"];	

    $sql = "INSERT INTO store_locations (location_id, store_id, location_city, location_address, location_county) VALUES ('$locationID', '$storeID', '$City', '$Address', '$County')";
    $result = mysqli_query($conn, $sql);

    $secondSQL = "INSERT INTO store_rating (rating_id, rating_score, store_id, store_location_id ) VALUES('$ratingID', '$scoreRating' ,'$storeID', '$locationID')";
    $secondResult = mysqli_query($conn, $secondSQL);

    if ($result) {

        echo "New location added successfully";
        header('Location: store_locations.php');
            
    } else {
        echo "Error adding location: " . mysqli_error($conn);
    }
    if ($secondResult) {

        echo "New location added successfully";
		header('Location: store_locations.php');
		
    } else {
        echo "Error adding location: " . mysqli_error($conn);
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
  <title>Add Locations</title>
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
                <a class="linkEdit" href="./products.php">Products</a>
            </div>
            <div class="col text-center bg">
                <a class="linkEdit" href="./login_registration.php">Login/ Register</a>
            </div>
        </div>
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
						<label for="storeID">Store ID:</label>
						<input placeholder="Type in either 1 for CeX or 2 for GAME" type="text" class="form-control" id="storeID" name="storeID" required>
					</div>
					<div class="form-group">
						<label for="Location_City">Location City:</label>
						<input type="text" class="form-control" id="Location_City" name="Location_City" required>
					</div>
                    
					<div class="form-group">
						<label for="Location_Address">Location Address:</label>
						<input type="text" class="form-control" id="Location_Address" name="Location_Address" required>
					</div>
					<div class="form-group">
						<label for="County">County:</label>
						<input type="text" class="form-control" id="County" name="County" required>
					</div>
					<button type="submit" class="btn btn-primary">Add Location</button>
				</form>
			</div>
		</div>
	</div>
</body>
<footer>
    <br>
</footer>
</html>
