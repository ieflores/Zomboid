
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
$query=mysqli_query($con,"SELECT * FROM blog where id = '$id'");
$row=mysqli_fetch_array($query);

$time = strtotime($row['dt']);
$newtime = date('F j, Y h:i A', $time);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css_files/guidance.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Admin panel</title>
</head>

<body>
<form method="POST" action="blogpedit.php?id=<?=$id?>" enctype="multipart/form-data">
    <!-- navbar -->
   <?php require "compnavg.php";?>

        <!-- top nav bar -->
        <div class="main">
        <?php require "comptopbarguidance.php";?>

    <div class="cards">
    <h1>Add Post</h1>
    </div> 
    <div style="margin-left:100px">

        <p><label>Date posted/updated:</label>
        <?=$newtime?></p>
        <label><b>Title:</b><br></label>
        <input type="text" name="sbj" style="margin-left: 0px; padding: 15px; outline:  none; border: 2px solid #ccc; box-sizing: border-box;" value="<?=$row["sbj"]?>" required><br>
        <label><b>Description:</b><br></label>
        <input type="text" name="msg" style="width: 300px; height: 200px; padding: 15px; outline:  none; border: 2px solid #ccc; box-sizing: border-box;" value="<?=$row["msg"]?>"  required><br>
        <center><img src="../images/bimg/<?=$row['filename']?>"  alt="images/bimg/<?=$row['filename']?>" style="width:150px; height:200px; margin-top: 25px;"></center>
        <input type="file" name="uploadfile" id="uploadfile" value="" style="margin-left:0px;"><br><br>
        <input type="submit" value="Edit" style="width: 100px; height: 30px; background-color: #ddd900; color: black; font-size: 16px; cursor: pointer;">
 
    </div>
                
        
    </div>
    </form>
</body>

</html>