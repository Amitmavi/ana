
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
    <link rel="stylesheet" href="/ana/registration.css">
    <link rel="stylesheet" href="/ana/dashboard.css">
    <title>Teacher Registration</title>

    <style>
        a {
    text-decoration: none;
    }
    </style>
</head>
<body>

<div class="slider">
        <header>ANA</header>
        <a style="text-decoration: none;" href="#"><i class="fa-solid fa-qrcode"></i><span>Dashboard</span></a>
        <a href="/ana/Social/social.php"><i class="fa-solid fa-globe"></i><span>Social</span></a>
        <a class="active" href="/ana/Teacher/teacher.php"><i class="fa-solid fa-users"></i><span>Teachers</span></a>
        <a   href="/ana/Student/student.php"><i class="fa-solid fa-user"></i><span>Students</span></a>
        <a href="#"><i class="fa-regular fa-folder"></i><span>Media</span></a>
        <a href="#"><i class="fa-solid fa-gear"></i><span>Setting</span></a>
        <a href="#"><i class="fa-solid fa-info"></i><span>Info</span></a>
        <a href="#"><i class="fa-regular fa-envelope"></i><span>Contact</span></a>
        <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Log Out</span></a>
    </div>

    <div class="container" style="margin-left: 450px;">
    <div class="size" style="height: 20px;">
        
    </div>
        <div class="logo">
            <img src="/ana/img/ana-logo.jpg" alt="aa">
         </div>
         <header ><h3> Teacher Registration</h3> </header>
         <form action="process_teacher_registration.php" method="post">
            <div class="form-first">
                <div class="details-persnol">
                    <span class="title">PERSONAL DETAILS</span>
                    <div class="fields">
                        <div class="input-fields">
                            <label>  first Name</label>
                            <input type="text" placeholder="Enter your name" name="first_name" required>
                        </div>


                        <div class="input-fields">
                            <label> Middle Name </label>
                            <input type="text" placeholder="Enter City" name="middle_name" >
                        </div>


                        <div class="input-fields">
                            <label> Last name </label>
                            <input type="text" placeholder="Enter state" name="last_name" required>
                        </div>

                        <div class="input-fields">
                            <label> Father's Name</label>
                            <input type="text" placeholder="Enter Father's Name" name="father_name" required>
                        </div>

                        <div class="input-fields">
                            <label> Mother's Name</label>
                            <input type="text" placeholder="Enter Mother's Name" name="mother_name" required>
                        </div>

                        
                        <div class="input-fields">
                            <label> Date Of Birth</label>
                            <input type="date" placeholder="Enter birth date" name="date_of_birth" required>
                        </div>
                        
                        <div class="input-fields">
                            <label> Mobile number</label>
                            <input type="text" placeholder="Enter number" name="mobile_number" required>
                        </div>


                        <div class="input-fields">
                            <label> Email</label>
                            <input type="text" placeholder="Enter your email" name="email" required>
                        </div>
                    </div>
                </div>



                <div class="details-id">
                    <span class="title">IDENTY DETAILS</span>
                    <div class="fields">
                        <div class="input-fields">
                            <label> Aadhar Number </label>
                            <input type="text" placeholder="Enter Aadhar No" name="aadhar_number" required>
                        </div>

                        <div class="input-fields">
                            <label> Course</label>
                            <select id="course" name="course">
                             <option value="">CHOOSE</option>
                             <option value="B.Teach">B.Tech</option>
                             <option value="POLLYTECHNIQUE">POLLYTECHNIQUE</option>
                             <option value="BBA">BBA</option>
                             <option value="BCA">BCA</option>
                            </select>
                        </div>


                        <div class="input-fields">
                            <label> Branch</label>
                            <select id="course" name="branch" >
                             <option value="">CHOOSE</option>
                             <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
                             <option value="MACHENICAL ">MACHENICAL ENGG</option>
                             <option value="ELECTRICAL ENGG">ELECTRICAL ENGG</option>
                             <option value="CIVIL ENGG">CIVIL ENGG</option>
                            </select>
                        </div>

                        <div class="input-fields">
                            <label> Gender</label>
                            <select id="course" name="gender">
                              <option value="">CHOOSE</option>
                              <option value="MALE">MALE</option>
                              <option value="FEMALE">FEMALE</option>
                            </select>
                        </div>

                        <div class="input-fields">
                            <label>Post</label>
                            <div class="input-fields">
                                <select id="Post" name="Post">
                                    <option value="">CHOOSE</option>
                                    <option value="H.O.D">H.O.D</option>
                                    <option value="Professor">Professor</option>
                                    <option value=" Assitant Professor">Assitant Professor</option>
                                </select>
                            </div>
                        </div>
                        

                        <div class="input-fields">
                            <label> Catagory</label>
                            <div class="input-fields">
                                <select id="Catagory" name="category">
                                 <option value="">CHOOSE</option>
                                 <option value="GENERAl">GENERAl</option>
                                 <option value="OBC">OBC</option>
                                 <option value="SC/ST">SC/ST</option>
                                </select>
                            </div>
                       </div>
                    </div>
                </div>


                <div class="details-add">
                    <span class="title">ADDRESS DETAILS</span>
                    <div class="fields">
                        <div class="input-fields">
                            <label> Corresponding Address </label>
                            <input type="text" placeholder="Enter  Address" name="corresponding_address" required>
                        </div>


                        <div class="input-fields">
                            <label> City/District</label>
                            <input type="text" placeholder="Enter City" name="city_district" required>
                        </div>


                        <div class="input-fields">
                            <label> State</label>
                            <input type="text" placeholder="Enter State" name="state" required>
                        </div>

                        <div class="input-fields">
                            <label> Country</label>
                            <input type="text" placeholder="Enter country" name="country" required>
                        </div>

                        <div class="input-fields">
                            <label> Pincode </label>
                            <input type="text" placeholder="Enter Pincode" name="pincode" required>
                        </div>
                    
                    </div>
                </div>
            </div>
            <input type="submit" class="btn" value="SUBMIT">   
            </div>
            </div>
        </form>

        
    </div>
    
    
</body>
</html>