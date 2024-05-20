<?php
session_start();
require_once "include/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);

	// Prepare a select statement
	$sql = "SELECT userID, userName, password FROM users WHERE userName = '$username'";

	if ($result = mysqli_query($conn, $sql)) {
		// Check if username exists, if yes then verify password
		if (mysqli_num_rows($result) == 1) {
			// Bind result variables
			$row = mysqli_fetch_array($result);
			$id = $row['userID'];
			$username = $row['userName'];
			$hashed_password = $row['password'];

			if (password_verify($password, $hashed_password)) {

				session_start();
            // Store data in session variables
			$_SESSION["loggedin"] = true;
			$_SESSION["userID"] = $id;
			$_SESSION["userName"] = $username;

			// Redirect user to homepage
			header("location: userProfile.php");
		} else {
			// Password is not valid, display a generic error message
			$login_err = "Invalid username or password.";
            header("location: login_registration.php");
		}
	} else {
		// Username doesn't exist, display a generic error message
		$login_err = "Invalid username or password.";
        header("location: login_registration.php");
	}
	mysqli_free_result($result);
}

}

// Close connection
mysqli_close($conn);

?>