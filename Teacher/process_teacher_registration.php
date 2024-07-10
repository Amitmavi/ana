<?php
// Include the database connection file
$servername = "localhost"; // Replace with your server name
$username = "xcispcjl_pulsezest_mavi"; // Replace with your MySQL username
$password = "#@mc]yW5m98+"; // Replace with your MySQL password
$dbname = "xcispcjl_ANA"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs (to prevent SQL injection)
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $father_name = mysqli_real_escape_string($conn, $_POST['father_name']);
    $mother_name = mysqli_real_escape_string($conn, $_POST['mother_name']);
    $date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
    $mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    //Default Password Logic  Starting 3 Letters of your Word then @ then last digit of your number.
    $password = substr($first_name, -3) . '@' . substr($mobile_number, -4);

    $aadhar_number = mysqli_real_escape_string($conn, $_POST['aadhar_number']);
    $branch = mysqli_real_escape_string($conn, $_POST['branch']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $corresponding_address = mysqli_real_escape_string($conn, $_POST['corresponding_address']);
    $city_district = mysqli_real_escape_string($conn, $_POST['city_district']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);




    
    // ... Retrieve and sanitize other form fields similarly ...
    
    // SQL query to insert student data into the database
    $sql = "INSERT INTO teachers (first_name, middle_name, last_name, father_name, mother_name, date_of_birth, mobile_number, password, email, aadhar_number, course, branch, gender, category, corresponding_address, city_district, state, country, pincode) 
            VALUES ('$first_name', '$middle_name', '$last_name', '$father_name', '$mother_name', '$date_of_birth', '$mobile_number', '$password', '$email', '$aadhar_number', '$course', '$branch', '$gender', '$category', '$corresponding_address', '$city_district', '$state', '$country', '$pincode')";

if (mysqli_query($conn, $sql)) {
    // Registration successful
    $teacherName = $first_name.$middle_name.$last_name;
    header("Location: class_selection_form.php?id=$email&name=$teacherName");// Redirect to a success page
    exit(); // Ensure subsequent code doesn't execute after the redirection
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

mysqli_close($conn); // Close the database connection
?>
