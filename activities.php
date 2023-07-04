<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
   
}

require "connect.php";

    $sql="SELECT * FROM blog";
    $result = mysqli_query($con,$sql);
    $i = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> APC RAMS NOTIGUIDE</title>
    <?php if($_SESSION["position"] == "student"){?>
        <link rel="stylesheet" href="css_files/style.css">
    <?php } elseif($_SESSION["position"] == "faculty"){?>
        <link rel="stylesheet" href="css_files/forfaculty.css">
    <?php } else{}?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>

<!-- nav -->
<?php require "components/nav.php"; ?>

<!-- activities -->
<?php require "components/hfacilities.php"; ?>

<div style="margin-left: 100px;">
<?php while($row = mysqli_fetch_array($result)) {  $i++;
            $time = strtotime($row['dt']);
            $newtime = date('F j, Y h:i A', $time);
            ?>

    <a class = "links" style=" color: black; text-decoration:none;" href="components/blogview.php?id=<?=$row['id'];?>">
    <div style="background-color: grey; width: 300px; height: 300px; ">
    <h2><?=$row['sbj']?>
    </h2> 
    <?=$row['msg']?>
    <center><img src="images/bimg/<?=$row['filename']?>"  alt="images/bimg/<?=$row['filename']?>" style="width:150px; height:200px; margin-top: 25px;"></center>
    <?=$newtime?>
    </div></a>
    <br>

        <?php } ?>

</div>

<!-- Footer ----->
<?php require "components/hfooter.php"; ?>

</body>
</html>