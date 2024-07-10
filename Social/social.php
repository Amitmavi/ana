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


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-rn5sjJcN7eVfyx7F3Rxi0BOmkcd6OW9Uc5N+LssMcb7+Y+3Q7F2MI5/F4qilxNO" crossorigin="anonymous">
    <link rel="stylesheet" href="/ana/const/template.css">
    <title>Social ANA</title>
</head>
<body>
    

    <div class="slider">
        <header>ANA</header>
        <a  href="/ana/dashboard.php"><i class="fa-solid fa-qrcode"></i><span>Dashboard</span></a>
        <a class="active" href="#"><i class="fa-solid fa-globe"></i><span>Social</span></a>
        <a href="/ana/Teacher/teacher.php"><i class="fa-solid fa-users"></i><span>Teachers</span></a>
        <a href="/ana/Student/student.php"><i class="fa-solid fa-user"></i><span>Students</span></a>
        <a href="#"><i class="fa-regular fa-folder"></i><span>Media</span></a>
        <a href="#"><i class="fa-solid fa-gear"></i><span>Setting</span></a>
        <a href="#"><i class="fa-solid fa-info"></i><span>Info</span></a>
        <a href="#"><i class="fa-regular fa-envelope"></i><span>Contact</span></a>
        <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Log Out</span></a>
    </div>


   <div class="container">
    <h1 style="text-align: center;">Welcome to Social Page</h1>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
