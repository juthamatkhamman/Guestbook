<?php
$servername = "localhost";
$username = "cpe0597";
$password = "@@##&&Pj240502";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>