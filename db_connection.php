<?php
$servername = "localhost"; // Replace with your server name
$username = "xcispcjl_pulsezest_mavi"; // Replace with your MySQL username
$password = "#@mc]yW5m98+"; // Replace with your MySQL password
$dbname = "xcispcjl_ANA"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($conn){
    echo("Connection Succesfull");
}
?>
