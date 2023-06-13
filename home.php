<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;

   
}?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title> APC GUIDANCE OFFICE</title>
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
</head>
<body>

<!-- nav -->
<?php require "components/nav.php"; ?>

<!----campus---->
<?php require "components/hgc.php"; ?>

<!-- facilities -->
<?php require "components/hfacilities.php"; ?>

<!--- call to action--->
<?php require "components/hcta.php"; ?>

<!-- Footer ----->
<?php require "components/hfooter.php"; ?>

</body>
</html>