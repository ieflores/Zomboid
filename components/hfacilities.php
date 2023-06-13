<!---facilities--->
<?php
require "connect.php";

$sql1="SELECT * FROM blog limit 3";
$result1 = mysqli_query($con,$sql1);
$i = 0;
?>

<section class="facilities">
    <h1>Guidance Activities</h1>
    <div class="row">
    <?php while($frow = mysqli_fetch_array($result1)) { $i++?>
        <div class="facilities-col">
            <img src="images/bimg/<?=$frow['filename']?>">
            <h3><?=$frow['sbj']?></h3>
        </div>
        <?php } ?>
        <!-- <div class="facilities-col">
            <img src="images/basketball.png">
            <h3>Interviews</h3>
            </div>
        <div class="facilities-col">
            <img src="images/cafeteria.png">
            <h3>Counseling</h3>
            </div>    
    </div> -->
</section>

    
