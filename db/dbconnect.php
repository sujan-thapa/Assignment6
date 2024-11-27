<?php
// Database configuration
$servername = "127.0.0.1"; 
$username = "root";        
$password = "";            
$dbname = "business_website";   

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// echo $conn

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully!";
?>
