<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/index.css"><!--This links the css to the html-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script><!--This links the jQuery liberies to the html-->
  <script src="../JAVASCRIPT/index.js" type="text/javascript"></script><!--This links javascript to the html-->
  <title>Login/ Registration</title>
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
                <a class="linkEdit" href="./add_location.php">Add Location</a>
            </div>
        </div>
    </div>

	<div class="container">
	<u><h2 class="text-center">Login/ Register</h2></u><br><br><br><br>

		<div class="row">
            
			<div class="col-md-6">
				<h2>Login</h2>
				<form action="login.php" method="post">
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>

			<div class="col-md-6">
				<h2>Register</h2>
				<form action="register.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Profile Picture:</label>
						<input type="file" name="profile_pic" class="form-control-file" required>
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>

		</div>

	</div>

</body>
</html>
