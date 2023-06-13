<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;

   
}?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> APC RAMS NOTIGUIDE - Activities and Content</title>
    <link rel="stylesheet" href="css_files/actcon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?
family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body>
<section class="sub-header">
    <nav>
        <a href="index.php"><img src="images/apclogo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="Calendar.php">CALENDAR</a></li>
                    <li><a href="ActAndCont.php">ACTIVITIES AND CONTENT</a></li>
                    <li><a href="Inquiry.php">INQUIRIES</a></li>
                </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>ACTIVITIES AND CONTENT</h1>
</section>

<!------ content------>

<div class="container">

    <div class="gallery">
        <img src="images/apc-classroom.jpg">
        <div class="desc">APC Job Search Webinar 2023</div>
    </div>

    <div class="gallery">
        <img src="images/cafeteria.png">
        <div class="desc">APC Webinar 2023</div>
    </div>

    <div class="gallery">
        <img src="images/guidance-webinar.png">
        <div class="desc">Guidance Office RAMdam Kita <br>Wellness Webinar Series 2023</div>
    </div>

    <div class="gallery">
        <img src="images/ms.jpg">
        <div class="desc">APC 1 on 1 Student Interviews</div>
    </div>

    <div class="gallery">
        <img src="images/globe.jpg">
        <div class="desc">APC Welcomes Globe</div>
    </div>

    <div class="gallery">
        <img src="images/classroom.jpg">
        <div class="desc">APC Starts Term 3 Midterm Week</div>
    </div>

</div>



<!----JavaScript for toggle menu ----->


<script>

    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }

</script>

</body>
</html>