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
    <link rel="stylesheet" href="css_files/forfaculty.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?
family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

</script>


</head>
<body>

<?php require "components/nav.php"; ?>

<!------ inquiry ------>
<?php require "components/inqfaculty.php"; ?>





<!----JavaScript----->


<script>

    function addRow(){
        var sNum = document.getElementById('sNum').value;
        var sName = document.getElementById('sName').value;
        var Subject = document.getElementById('Subject').value;
        var aNo = document.getElementById('aNo').value;
        var DoA = document.getElementById('DoA').value;
        var Rem = document.getElementById('Rem').value;

        var table = document.getElementsByTagName('table')[0];

        var newRow = table.insertRow(1);

        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);
        var cell4 = newRow.insertCell(3);
        var cell5 = newRow.insertCell(4);
        var cell6 = newRow.insertCell(5);
        
        cell1.innerHTML = sNum;
        cell2.innerHTML = sName;
        cell3.innerHTML = Subject;
        cell4.innerHTML = aNo;
        cell5.innerHTML = DoA;
        cell6.innerHTML = Rem;
    }

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