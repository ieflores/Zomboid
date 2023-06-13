
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


$sql="SELECT * FROM blog";
$result = mysqli_query($con,$sql);


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

    <div class="cards">
    <h1>Posts</h1>
    <a href="components/guidanceBlogadd.php"><Button style="margin-top: 5px; width: 100px; height: 30px; background-color: #ddd900; color: black; font-size: 16px; cursor: pointer;">Add Post</Button></a>
    </div> 
    <div style="margin-left:100px">

    <!-- posts -->
    <?php
        while($row = mysqli_fetch_array($result)) { 
            $time = strtotime($row['dt']);
            $newtime = date('F j, Y h:i A', $time);
            ?>

    <div style="background-color: lightgray; width: 350px; height: 300px; ">
    <h2><?=$row['sbj']?>
    <a  class = "links" href="components/guidanceBlogedit.php?id=<?=$row['id'];?>"><i class="far fa-edit"></i></a>
    <a  class = "links" href="components/bdelete.php?id=<?=$row['id'];?>"><i class="far fa-trash-alt"> </i></a>
    </h2> 
    <?=$row['msg']?>
    <center><img src="images/bimg/<?=$row['filename']?>"  alt="images/bimg/<?=$row['filename']?>" style="width:150px; height:200px; margin-top: 25px;"></center>
    <?=$newtime?>
    </div>
    <br>
        <?php } ?>

    </div>
                
       
    </div>
</body>

</html>