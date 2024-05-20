<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname ="main_store_locations";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
?>