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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-rn5sjJcN7eVfyx7F3Rxi0BOmkcd6OW9Uc5N+LssMcb7+Y+3Q7F2MI5/F4qilxNO" crossorigin="anonymous">
    <link rel="stylesheet" href="/ana/const/template.css">
    <title>Dashboard</title>
</head>
<body>
    <style>
        h1{
            text-align: center;
            color: red;
            font-size: 2.5rem;
            font-weight: 600;  
        }
        .Heading-container{
            background-color: blue;
           margin-left: 230px;
           width: 85%;
        }
        .slider-img{
            height: 350px;
            width: 85%;
            background-image: url(https://www.anacollege.org/images/banner8.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            animation-name: myani;
            animation-duration: 12s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            margin-left: 230px;
            margin-right: 100rem;

            padding: -20;
    
        }
        @keyframes myani {
            0%{background-image: url(https://www.anacollege.org/images/ana-banner.jpg);}
            35%{background-image: url(https://www.anacollege.org/images/banner6.jpg);}
            75%{background-image: url(https://www.anacollege.org/images/Agnipath_Yojna.jpg);}
            90%{background-image: url(https://www.anacollege.org/images/banner1.jpg);}
            
        }



.service h2{
    justify-content: center;
    text-align: center;
    font-size:5px;
 
}

.services-container{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5rem;
    margin-left: 16rem;
    margin-right: 1rem;
    margin-top: 2rem;
    
}

.services-container .services-box{
    
    background: rosybrown;
    height: 6rem;
    width: 19rem;
    padding: 2rem ;
    border-radius: 20px;
    text-align: center;
    border: .2rem solid black;
    transition: .5s ease;
    box-shadow: 0 0 1.5rem ;

}

.services-box h3{
    font-size: 2.3rem;
    color: black;

}
.services-box p{
    font-size: 2.3rem;
    color: black;

}

/*faculty section */

.faculty h2{
    justify-content: center;
    text-align: center;
    font-size:2rem;
}



.faculty-container{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5rem;
    margin-left: 16rem;
    margin-right: 1rem;
    margin-top: 2rem;
    
}

.faculty-container .faculty-box{
    
    background: bisque;
    height: 13rem;
    width: 16rem;
    padding: 2rem ;
    border-radius: 20px;
    text-align: center;
   
    transition: .5s ease;
    margin-top: 1rem;
    margin-bottom: 5rem;

}

.faculty-box h3{
    font-size: 1.5rem;
    color: black;

}
.faculty-box h4{
    font-size: 20px;

}
.faculty-box h2{
    font-size: 15px;
}
.faculty-box p{
    font-size: 20px;
    color: black;

}
.faculty-box img{
    height: 7rem;
    width: 7rem;
    border-radius: 50%;
}


 </style>
    

    <div class="slider">
        <header>ANA</header>
        <a class="active" href="#"><i class="fa-solid fa-qrcode"></i><span>Dashboard</span></a>
        <a href="/ana/Social/social.php"><i class="fa-solid fa-globe"></i><span>Social</span></a>
        <a href="/ana/Teacher/teacher.php"><i class="fa-solid fa-users"></i><span>Teachers</span></a>
        <a href="/ana/Student/student.php"><i class="fa-solid fa-user"></i><span>Students</span></a>
        <a href="#"><i class="fa-regular fa-folder"></i><span>Media</span></a>
        <a href="#"><i class="fa-solid fa-gear"></i><span>Setting</span></a>
        <a href="#"><i class="fa-solid fa-info"></i><span>Info</span></a>
        <a href="#"><i class="fa-regular fa-envelope"></i><span>Contact</span></a>
        <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i><span>Log Out</span></a>
    </div>


   <div class="Heading-container">
       <h1 style="color: white">A.N.A College of Engineering and Management studies Bareilly</h1> 
    
   </div>
   
   <div class="slider-img" >

   </div>

   <!-- service section-->
   <section class="service" id="services">
        <div class="services-container">
            <div class="services-box">
                <h3>Total Teacher</h3>
                <p> 15 </p>
            </div>

            <div class="services-box">
                <h3>Total Student</h3>
                <p>15</p>
            </div>

            <div class="services-box">
                <h3>Circular</h3>
                <p>2</p>
            </div>
        </div>
    </section>

    <!--faculty section-->
    <section class="faculty" id="faculty">
       
        <div class="faculty-container">
            <div class="faculty-box">
                <img src="https://project.pulsezest.com/ana/img/amit_mavi.png" alt="aa">
                <h3>Amit Gurjar</h3>
                <h4>B.tech</h4>
                <p>Computer Science Engineering</p>
                <h2>(H.O.D)</h2>
            </div>

            <div class="faculty-box">
            <img src="https://project.pulsezest.com/ana/img/amit_mavi.png" alt="aa">
                <h3> Amit Gurjar</h3>
                <h4>B.tech</h4>
                <p>Computer Science Engineering</p>
                <h2>(Assistant Professor)</h2>

            </div>
            
            <div class="faculty-box">
            <img src="https://project.pulsezest.com/ana/img/amit_mavi.png" alt="aa">
                <h3> Amit Gurjar</h3>
                <h4>B.tech</h4>
                <p>Computer Science Engineering</p>
                <h2>(Assistant Professor)</h2>
            </div>

           

            <div class="faculty-box">
            <img src="https://project.pulsezest.com/ana/img/amit_mavi.png" alt="aa">
                <h3>Amit Gurjar</h3>
                <h4>B.tech</h4>
                <p>Computer Science Engineering</p>
                <h2>(Assistant Professor)</h2>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
