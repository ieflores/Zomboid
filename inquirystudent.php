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
    <title> APC RAMS NOTIGUIDE - Inquiries</title>
    <link rel="stylesheet" href="css_files/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?
family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body>

<?php require "components/nav.php"; ?>

<!-- form -->
<!-- <form action="https://formsubmit.co/fakeapcguidance18@gmail.com" method="POST"> -->
<form action="components/inquiryps.php" method="POST">

<!------ content ------>

<section class="contact-us">
    <div class="inq-contain">
            <div class="contact-col" >
                <container class="faqlbl">
                    <label for="faq"><b>Choose a subject</b><br></label>
                    <select id="isbj" name="isbj">
                        <option value=""></option>
                        <option value="Request to set a Counseling Schedule">Request to set a Counseling Schedule</option>
                        <option value="Request for change in Appointment Schedule setting">Request for change in Counseling Appointment setting</option>
                        <option value="Financial Assistance">Financial Assistance</option>
                    </select>
                </container>
                <input type="hidden" id="iid" name="iid" value="<?=$_SESSION["id"]?>">
                <input type="hidden" id="iname" name="iname" value="<?=$_SESSION["fname"]. " " . $_SESSION["lname"]?>">
                <input type="hidden"  id="iemail" name="iemail" value="<?=$_SESSION["username"]?>">
                <textarea rows="8" id="imsg" name="imsg" placeholder="Message" style="border: 2px solid #ccc; box-sizing: border-box; padding: 15px;" required></textarea>
                <button type="submit" class="submitbtn">Send Message</button>
</form>
        </div>
    </div>
</section>





<!----JavaScript for toggle menu ----->


<script>

    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }

</script>

</body>
</html>