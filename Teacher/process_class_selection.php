<?php
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace with your database credentials
// Include the database connection file
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

    // Get all records from the HTML table
    $records = $_POST['records'];
    $teacherName = mysqli_real_escape_string($conn, $_POST['teacherName']);
    $teacherEmail = mysqli_real_escape_string($conn, $_POST['teacherEmail']);

    // Loop through the records array and insert each record into the table
    // Prepare the SQL statement outside the loop
    $sql = "INSERT INTO classRecords (branch, semester, subject, teacherName, teacherEmail) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

// Bind parameters and execute the statement inside the loop
    foreach ($records as $record) {
    $branch = $record['branch'];
    $semester = $record['semester'];
    $subject = $record['subject'];

    $stmt->bind_param("sssss", $branch, $semester, $subject, $teacherName, $teacherEmail);
    $stmt->execute();
    
    if ($stmt->errno) {
        echo "Error: " . $stmt->error;
    }
}

echo "All records inserted successfully";

// Close statement
$stmt->close();


    // Close connection
    $conn->close();
}
?>
