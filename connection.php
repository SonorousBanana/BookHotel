<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "panorama_db";

// Connection
$conn = new mysqli($servername, $username, $password, $database);

// For checking if connection is successful or not
if ($conn->connect_error) {
echo "Connection failed: ". $conn->connect_error;
}
