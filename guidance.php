
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;

   
}?>

<?php
require 'connect.php';
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM appoint";
$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql);
$i = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_files/guidance.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Admin panel</title>
</head>

<body>
    <!-- navbar -->
   <?php require "components/navg.php";?>

        <!-- top nav bar -->
        <div class="main">
        <?php require "components/topbarguidance.php";?>

            <!-- appointment counter -->
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                       <?php while($row = mysqli_fetch_array($result1)) { $i++;} ?>
                        <div class="number" style="color:black;"><?=$i?></div>
                        
                        <?php if ($i == 1) { ?>
                        <div class="card-name">Appointment</div>
                       <?php } elseif ($i >= 2) { ?>
                        <div class="card-name">Appointments</div>
                       <?php } else { ?>
                        <div class="card-name">Appointment</div>
                       <?php } ?>
                       
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                </div>
            </div>

            <!-- table appointments -->
            <div class="tables">
                <div class="last-appointments">
                    <div class="heading">
                    <?php if ($i == 1) { ?>
                        <h2>Appointment</h2>
                       <?php } elseif ($i >= 2) { ?>
                        <h2>Appointments</h2>
                       <?php } else { ?>
                        <h2>Appointment</h2>
                       <?php } ?>
                    </div>
                    <table class="appointments">
                        <thead>
                            <td>ID</td>
                            <td>Student ID</td>
                            <td>Email</td>
                            <td>Subject</td>
                            <td>Appointed Schedule</td>
                        </thead>
                        <tbody>
<?php
while($asrow = mysqli_fetch_array($result)) { 

    $time = strtotime($asrow['tm']);
    $newtime = date('h:i A', $time);

    $dto = strtotime($asrow['dt']);
    $newdto = date('F j, Y', $dto);
    
  ?>
        <tr>
                                <td><?=$asrow['id']?></td>
                                <td><?=$asrow['aid']?></td>
                                <td> <?=$asrow['aemail']?></td>
                                <td> <?=$asrow['sbj']?></td>
                                <td> <?=$newtime."<br>". $newdto?></td>
                                <td>
                                <a  class = "links" href="components/guidanceview.php?id=<?=$asrow['id'];?>"><i class="far fa-eye"></i></a>
                                <a  class = "links" href="components/guidanceedit.php?id=<?=$asrow['id'];?>"><i class="far fa-edit"></i></a>
                                <a  class = "links" href="components/adelete.php?id=<?=$asrow['id'];?>"><i class="far fa-trash-alt"> </i></a>
                                </td>
                            </tr>
                
<?php }
mysqli_close($con);
?>

                            
                        </tbody>
                    </table>
                </div>

                <!-- guidance table -->
                <div class="doctor-visiting">
                    <div class="heading">
                        <h2>Guidance Counselors</h2>
                    </div>
                    <table class="visiting">
                        <thead>
                            <td>Name</td>
                            <td>Visit time</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Arnold Francis Oriño</td>
                                <td>7:00AM to 5:00PM</td>
                            </tr>
                            <tr>
                                <td>Kamille Salvana</td>
                                <td>7:00AM to 5:00PM</td>
                            </tr>
                            <tr>
                                <td>Ayesa A. Aguilar</td>
                                <td>7:00AM to 5:00PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="appointBtn">
                <a href="components/acsv.php"><button class="a-button">Download CSV</button></a>
            </div>
            
        </div>

    </div>
</body>

</html>