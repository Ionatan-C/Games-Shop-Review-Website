<?php
require_once "include/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = trim($_POST["username"]);
	$email = trim($_POST["email"]);
	$password = trim($_POST["password"]);

	// Check if username already exists
	$sql = "SELECT userID FROM users WHERE userName = '$username'";
	if ($result = mysqli_query($conn, $sql)) {
		if (mysqli_num_rows($result) == 1) {
			echo "Error: Username already exists";
			exit();
		}
	}

	// Hash the password
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	// Upload profile picture
	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$uploadOk = 1;
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			echo "Error: File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check file size
	if ($_FILES["profile_pic"]["size"] > 500000) {
		echo "Error: File is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Error: Only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Error: Your file was not uploaded.";
	// If everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
			echo "Your file has been uploaded.";
		} else {
			echo "Error: There was an error uploading your file.";
		}
	}

	// Insert new user into database
	$sql = "INSERT INTO users (userName, email, password, profile_pic) VALUES ('$username', '$email', '$hashed_password', '$target_file')";
	if (mysqli_query($conn, $sql)) {
		header("location: store_locations.php");
		exit();
	} else {
		echo "Error: Could not execute $sql. " . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>
