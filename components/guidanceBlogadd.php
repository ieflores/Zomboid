
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
    <link rel="stylesheet" href="../css_files/guidance.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Admin panel</title>
</head>

<body>
<form method="POST" action="blogpp.php" enctype="multipart/form-data">
    <!-- navbar -->
   <?php require "compnavg.php";?>

        <!-- top nav bar -->
        <div class="main">
        <?php require "comptopbarguidance.php";?>

    <div class="cards">
    <h1>Add Post</h1>
    </div> 
    <div style="margin-left:100px">
    
        <label style=""><b>Title:</b><br></label>
        <input type="text" name="sbj" style="margin-left: 0px; padding: 15px; outline:  none; border: 2px solid #ccc; box-sizing: border-box;" required><br><br>
        <label><b>Description:</b><br></label>
        <input type="text" name="msg" style="width: 300px; height: 200px; padding: 15px; outline:  none; border: 2px solid #ccc; box-sizing: border-box;"  required><br><br>
        <input type="file" name="uploadfile" id="uploadfile" value="" style="margin-left:0px;"><br><br>
        <input type="submit" value="Submit" style="width: 100px; height: 30px; background-color: #ddd900; color: black; font-size: 16px; cursor: pointer;">
 
    </div>
                
        
    </div>
    </form>
</body>

</html>