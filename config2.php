<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "<script> alert('Booking is succesfully, You will be send a comfirmation mail') </script>";

?>