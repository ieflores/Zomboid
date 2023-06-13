
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login.php');
    exit;

   
}?>

<?php
require '../connect.php';
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$id=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM appoint where id = '$id'");
$row=mysqli_fetch_array($query);

$time = strtotime($row['tm']);
$newtime = date('h:i A', $time);

$dto = strtotime($row['dt']);
$newdto = date('F j, Y', $dto);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css_files/guidance.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Appointment #<?=$row['id']?></title>
</head>

<body>
    <!-- navbar -->
    <?php require "compnavg.php";?>
        <!-- top nav bar -->
        <div class="main">
        <?php require "comptopbarguidance.php";?>

        <!--
        <div>
            <a href="guidance.php"><button class="backBtn"><b><</b></button></a>
        </div>
        -->

            <!-- body -->
        <div class="cards">
        <div class="appointView">
           <div class="aID"><b>Appointment ID:<br></b> <?=$row['id']?></div>
            <br>
           <div class="apcID"><b>APC ID:<br></b> <?=$row['aid']?></div>
            <br>
           <div class="gvName"><b>Name:</b> <br><?=$row['aname']?></div>
            <br>
           <div class="gvEmail"><b>Email:<br></b> <?=$row['aemail']?></div>
            <br>
           <div class="gvSubj"><b>Subject:<br></b> <?=$row['sbj']?></div>
            <br>
            <br>
           <div class="gvPremise"><b>Premise:<br></b> <?=$row["prem"]?></div>
            <br>
           <div class="gvTime"><b>Time:<br></b> <?=$newtime?></div>
            <br>
           <div class="gvDate"><b>Date:<br></b> <?=$newdto?></div>
        </div>
        </div>
</body>

</html>