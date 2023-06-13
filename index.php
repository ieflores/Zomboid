<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;

   
}?>

<?php 

if($_SESSION["position"] == "student"){  header('Location:home.php'); }

elseif($_SESSION["position"] == "faculty"){ header('Location:home.php'); }

elseif($_SESSION["position"] == "guidance"){ header('Location:guidance.php'); } 

else{}

?>

