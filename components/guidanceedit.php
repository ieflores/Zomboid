
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

            <!-- body -->
        <form method="POST" action="geditp.php?id=<?=$id?>" enctype="multipart/form-data">
        <div class="cards">
        <div class="appointEdit">
           <div class="aID"><b>Appointment ID:</b><br> <?=$row['id']?></div>
            <br>
            <div class="apcID"><b>APC ID:</b><br> <?=$row['aid']?></div>
            <br>
            <div class="gvName"><b>Name:</b><br> <?=$row['aname']?></div>
            <br>
            <div class="gvEmail"><b>Email:</b><br> <?=$row['aemail']?></div>
            <br>
            <div class="gvSubj"><b>Subject:</b><br> <?=$row['sbj']?></div>
            <br>
            <br>
            <div class="gvPremise"><select style="width: 130px; height: 30px;" id="prem" name="prem" value="">
                <option><?=$row['prem']?></option>
                <option>---------</option>
                <option value="Online">Online</option>
                <option value="School Premise">School Premises</option>
            </select>
            </div>
            <br>
            <div class="gvTime"><b>Time:</b><br> <input type="time" id="time" name="time" style="width: 100px; height: 30px;" value="<?=$row['tm']?>"></input></div>
            <br>
            <div class="gvDate2"><b>Date:</b><br> <input type="date" id="date" name="date"  style="width: 100px; height: 30px;" value="<?=$row['dt']?>"></input></div>
           <input type="submit" value="EDIT" id="submit" style="width: 100px; background-color: blue; color: white; margin-left: 240px; margin-top: 50px; cursor: pointer;">
        </div>
        </div>
        </div>
        
        </form>
</body>

</html>