
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


$sql="SELECT * FROM inquiry";
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
                        <div class="card-name">Inquiry</div>
                       <?php } elseif ($i >= 2) { ?>
                        <div class="card-name">Inquiries</div>
                       <?php } else { ?>
                        <div class="card-name">Inquiry</div>
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
                        <h2>Inquiry</h2>
                       <?php } elseif ($i >= 2) { ?>
                        <h2>Inquiries</h2>
                       <?php } else { ?>
                        <h2>Inquiry</h2>
                       <?php } ?>
                    </div>
                    <table class="appointments">
                        <thead>
                            <td>Inquiry ID</td>
                            <td>APC ID</td>
                            <td>Email</td>
                            <td>Subject</td>
                            <td>Appointed Schedule</td>
                        </thead>
                        <tbody>
<?php
while($asrow = mysqli_fetch_array($result)) { 
  ?>
        <tr>
                                <td><?=$asrow['id']?></td>
                                <td><?=$asrow['iid']?></td>
                                <td><?=$asrow['iname']?></td>
                                <td><?=$asrow['iemail']?></td>
                                <td><?=$asrow['isbj']?></td>
                                <td><?=$asrow['imsg']?></td>
                                <td><?=$asrow['idt']?></td>
                                <td>
                                <a  class = "links" href="components/guidanceinqview.php?id=<?=$asrow['id'];?>"><i class="far fa-eye"></i></a>
                                    <a  class = "links" href="components/idelete.php?id=<?=$asrow['id'];?>"><i class="far fa-trash-alt"> </i></a>
                                </td>
                            </tr>
                
<?php }
mysqli_close($con);
?>

                            
                        </tbody>
                    </table>
                </div>
                
            </div>
        
            <div class="inqBtn">
                <button class="i-button">Button</button>
            </div>

        </div>
    </div>
</body>

</html>