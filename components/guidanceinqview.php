
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
$query=mysqli_query($con,"SELECT * FROM inquiry where id = '$id'");
$row=mysqli_fetch_array($query);

$time = strtotime($row['idt']);
$newtime = date(' F j, Y h:i A', $time);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css_files/guidance.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>inquiry #<?=$row['id']?></title>
</head>

<body>
    <!-- navbar -->
    <?php require "compnavg.php";?>

        <!-- top nav bar -->
        <div class="main">
        <?php require "comptopbarguidance.php";?>

            <!-- body -->
        <div class="cards">
            <div class="inqContainer">
           <h2 style="margin-left: 10px; margin-top: 10px;">Inquiry ID: <?=$row['id']?></h2>
            <br>
           <div class="ivID"><b>APC ID:</b><br> <?=$row['iid']?></div>
            <br>
           <div class="ivName"><b>Name:</b><br> <?=$row['iname']?></div>
            <br>
           <div class="ivEmail"><b>Email:</b><br> <?=$row['iemail']?></div>
            <br>
           <div class="ivSubj"><b>Subject:</b><br> <?=$row['isbj']?></div>
            <br>
           <div class="ivMessage"><b>Message:</b><br> <?=$row['imsg']?></div>
            <br>
           <div class="ivDT"><b>Date & Time:</b><br> <?=$newtime?></div>
           
            </div>
        </div>
        </div>
</body>

</html>