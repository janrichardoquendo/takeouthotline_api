<?php

//$servername = "62.216.224.26";
//$username = "web90u2";
//$password = "ui*9gytumnv";

$servername = "85.90.226.131";
$username = "c1dbu_ai";
$password = "oreTkF_ZA03";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
