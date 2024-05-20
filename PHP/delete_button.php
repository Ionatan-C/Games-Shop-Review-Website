<?php
include 'include/config.php';


$ID = $_GET['id'];

$sql = "DELETE FROM store_locations WHERE location_id = '$ID' ";
$result = mysqli_query($conn, $sql);

$sql1 = "DELETE FROM store_rating WHERE rating_id = '$ID' ";
$result1 = mysqli_query($conn, $sql1);

if ($result1) {
    header('Location: index.php');
} else {
    echo "Error deleting book: " . mysqli_error($conn);
}

if ($result) {
    header('Location: index.php');
} else {
    echo "Error deleting book: " . mysqli_error($conn);
}
?>