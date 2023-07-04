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
</head>
<body>

<!-- nav -->
<?php require "components/nav.php"; ?>

<div class="faqs">
<h1 class="freq">FREQUENTLY ASKED QUESTIONS</h1>
    <p>
        <h3>1. What is counseling?</h3>       
        <ol>
            <li>Counseling is a collaborative session between the counselor and the counselee (student). The counselor helps the
            counselee identify the goals <br> and solutions to problems that cause emotional distress in their lives that could affect
            over all school performance. Counselors seek to improve <br> communication, coping skills, and self-esteem, and facilitate
            change in behavioral patterns of the counselee.</li>
        </ol>
        <br>
        <h3>2. Do I need an appointment to see a counselor?</h3> 
        <!-- <h4>Answer</h4> -->
        <ol>
            <li>Yes. In certain situations when there is an urgent need for intervention, <br> the office accomodates the 
                counselee as soon as a counselor is available.
            </li>
        </ol>
        <br>
        <h3>3. What are the counseling office hours?</h3> 
        <!-- <h4>Answer</h4> -->
        <ol>
            <li>Office hours are Monday through Friday, 7:00am to 5:00pm.</li>
        </ol>
        <!-- <h3>4. </h3> 
        <h4>Answer</h4>
        <ol>
            <li>hello world</li>
        </ol>
        -->
    </p>
    <br><br>

</div>

<!-- footer ----->
<?php require "components/hfooter.php"; ?>

</body>
</html>