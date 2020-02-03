<?php
$servername = "localhost";
$username = "root";
$password = "chamathrat7710578";
$dbname ="pirithma";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>