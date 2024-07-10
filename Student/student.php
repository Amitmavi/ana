<?php
// dashboard.php

// Start the session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["username"])) {
    // Redirect to the login page
    header("Location: /ana/login.php");
    exit();
}
  

// The rest of your dashboard.php code goes here
// ...

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/ana/dashboard.css">
    <title>Student</title>

    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="slider">
        <header>ANA</header>
        <a style="text-decoration: none;" href="/ana/dashboard.php"><i class="fa-solid fa-qrcode"></i><span>Dashboard</span></a>
        <a href="/ana/Social/social.php"><i class="fa-solid fa-globe"></i><span>Social</span></a>
        <a href="/ana/Teacher/teacher.php"><i class="fa-solid fa-users"></i><span>Teachers</span></a>
        <a class="active" href="#"><i class="fa-solid fa-user"></i><span>Students</span></a>
        <a href="#"><i class="fa-regular fa-folder"></i><span>Media</span></a>
        <a href="#"><i class="fa-solid fa-gear"></i><span>Setting</span></a>
        <a href="#"><i class="fa-solid fa-info"></i><span>Info</span></a>
        <a href="#"><i class="fa-regular fa-envelope"></i><span>Contact</span></a>
        <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Log Out</span></a>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Student</h3>
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Search for a student" aria-label="Search" aria-describedby="search-addon">
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-primary">Search</button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-primary" onclick="redirectToAnotherPage()">Add Student</button>
            </div>
        </div>

        <div class="seiz" style="height: 20px;">

        </div>
        <h4>Studnets Details</h4>
        <table class="table">
    
            <tbody>
                <?php include 'studentDetails.php'; ?>
            </tbody>
        </table>
    </div>


    


    <script>
        function redirectToAnotherPage() {
            // Replace 'another-page.html' with the actual URL of the page you want to redirect to
            window.location.href = '/ana/Student/add_student.php';
        }
    </script>



</body>

</html>