<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
   
}

require "../connect.php";

$id=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM blog where id = '$id'");
$row=mysqli_fetch_array($query);

$time = strtotime($row['dt']);
$newtime = date('F j, Y h:i A', $time);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> APC RAMS NOTIGUIDE</title>
    <?php if($_SESSION["position"] == "student"){?>
        <link rel="stylesheet" href="../css_files/style.css">
    <?php } elseif($_SESSION["position"] == "faculty"){?>
        <link rel="stylesheet" href="../css_files/forfaculty.css">
    <?php } else{}?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?
family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>

<!-- nav -->
<section class="header">
    <nav>
        <a href="index.php"><img src="../images/apclogo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="../activities.php">ACTIVITIES</a></li>
                    <?php if($_SESSION["position"] == "student" ){?>
                    <li><a href="../Calendar.php">CALENDAR</a></li>
                    <?php } elseif ($_SESSION["position"] == "faculty") {?>
                    <li><a href="../CalendarFaculty.php">CALENDAR</a></li>
                    <?php } else {}?>
                    <?php if($_SESSION["position"] == "student" ){?>
                    <li><a href="../inquirystudent.php">INQUIRY</a></li>
                    <?php } elseif ($_SESSION["position"] == "faculty") {?>
                    <li><a href="../inquiryfaculty.php">INQUIRY</a></li>
                    <?php } else {}?>
                    <?php if ($_SESSION["position"] == "student") {?>
                    <li><a href="../faq.php">FAQ</a></li>
                    <?php } elseif ($_SESSION["position"] == "faculty") {?>
                    <li><a href="../faq.php">FAQ</a></li>
                    <?php } else {}?>
                    <li><a href="../logout.php">LogOut</a></li>
                
                </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>

 <div class="text-box" style="margin-top: 100px;">

        <label>Subject:</label>
        <?=$row["sbj"]?><br><br>
        <label>Message:</label>
        <?=$row["msg"]?>
        <center><img src="../images/bimg/<?=$row['filename']?>"  alt="images/bimg/<?=$row['filename']?>" style="width:30%; height: 30%; margin-top: 50px;"></center>
        <p><label>Date posted/updated:</label>
        <?=$newtime?></p>

 </div>   

</section>
                    <!-- <li><a href="ActAndCont.php">ACTIVITIES AND CONTENT</a></li> -->


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

<!-- Footer ----->
<?php require "hfooter.php"; ?>

</body>
</html>