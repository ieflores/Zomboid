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
    <title> APC RAMS NOTIGUIDE - Calendar</title>
    <link rel="stylesheet" href="css_files/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?
family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<script src="script.js" defer></script>
</head>
<body>

<?php require "components/nav.php"; ?>

<!------ schedule ------>

<div class="schedcontainer">
        <div class="form">
            <div class="form-text">
                <h1>CHECK SCHEDULES HERE</h1>
                <!-- <p>SCHEDULE FOR GUIDANCE COUNSELING HERE</p> -->
            </div>
            <div class="sched-status">
            
            
<?php
require 'connect.php';
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM appoint";
$result = mysqli_query($con,$sql);

while($asrow = mysqli_fetch_array($result)) {
  ?>
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">Appointment ID:</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['id']?>
                    </div>
                    </div>
                
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">Student ID:</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['aid']?>
                    </div>
                    </div>
               
                <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">Student Name:</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['aname']?>
                    </div>
                    </div>
                 
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">Student Email:</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['aemail']?>
                    </div>
                    </div>
               
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">Subject:</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['sbj']?>
                    </div>
                    </div>
              
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">Appointment Sched:</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['tm']." ". $asrow['dt']?>
                    </div>
                    </div>
                    
<?php }
mysqli_close($con);
?>

            </div>
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