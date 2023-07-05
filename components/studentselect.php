<?php

$q = intval($_GET['q']);

require '../connect.php';
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM accounts WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

while($asrow = mysqli_fetch_array($result)) {
  ?>
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">Name:</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['fname']. " " . $asrow['lname']?>
                    </div>
                    </div>
                <br>
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">ID:</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['id']?>
                    </div>
                    </div>
                <br>
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">Email:</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$asrow['email']?>
                    </div>
                    </div>

                    <br>

                    <?php if ($asrow["course"] == "bscsss"){?>
                    <img name="ssched" id="ssched" src="images/<?=$asrow['course']?>.png" alt="Admin" class="rounded-circle" width="300px">

                    <?php } elseif ($asrow["course"] == "bscssf"){ ?>
                    <img name="ssched" id="ssched" src="images/<?=$asrow['course']?>.png" alt="Admin" class="rounded-circle" width="300px">

                    <?php } elseif ($asrow["course"] == "bsitmi"){ ?>
                    <img name="ssched" id="ssched" src="images/<?=$asrow['course']?>.png" alt="Admin" class="rounded-circle" width="300px">
                    <?php } else {}?>




                    <!-- sched -->
                  <!-- <br>
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">MNSYSIT</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    Monday & Thursday
                    7:30AM - 9:30AM <br>
                    Jo Anne M. de la Cuesta
                    </div>
                    </div>
                  <br>
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">THESIS1</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    Monday & Thursday
                    9:30AM - 11:30AM <br>
                    Roselle Wednesday L. Gardon
                    </div>
                    </div>
                  <br>
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">EXCOMP2</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    Monday & Thursday
                    1:30PM - 3:30PM <br>
                    Leonardino R. Lapira
                  <br>
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">MCSPROJ</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    Wednesday
                    1:30PM - 5:30PM <br>
                    Manuel Sebastian S. Sanchez
                    </div>
                    </div>
                  <br>
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">PROJMAN</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    Monday & Thursday
                    3:30PM - 5:30PM <br>
                    Jose Eugenio L. Quesada
                    </div>
                    </div>

                  <br>
                    <div class="row">
                    <div class="col-sm-3">
                    <h4 class="mb-0">GAMEPROD</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    TSaturday
                    7:30AM - 11:30AM <br>
                    Marica Uchida
                    </div>
                    </div> -->
                    

<input type="hidden" id="aname" name="aname" value="<?=$asrow['fname']. " " . $asrow['lname']?>">
<input type="hidden" id="aemail" name="aemail" value="<?=$asrow['email']?>">




<?php }
mysqli_close($con);
?>
