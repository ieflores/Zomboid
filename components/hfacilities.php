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
        <a class = "links" style=" color: black; text-decoration:none;" href="components/blogview.php?id=<?=$frow['id'];?>">
        <div class="facilities-col">
            <img src="images/bimg/<?=$frow['filename']?>">
            <h3><?=$frow['sbj']?></h3>
        </div>
        </a>
        <?php } ?>
        
</section>

    
