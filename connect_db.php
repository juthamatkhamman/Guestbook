<?php
$servername = "localhost";
$username = "cpe0597";
$password = "@@##&&Pj240502";
$db_name = "cpe0597";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
?>