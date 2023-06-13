<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;

   
}?>

<?php require "connect.php";
$aquery=mysqli_query($con,"SELECT * FROM accounts");
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
<form action="components/guidanceAppointPost.php" method="POST">
   <!-- navbar -->
   <?php require "components/navg.php";?>
   
        <div class="main">
        <?php require "components/topbarguidance.php";?>
            
            <div class="panel" style="height:680px; ">
                <div class="panel-info" style="margin-top: -25px;">
                <div id="txtoutput"></div>
                </div>
            </div>  
            
            <div class="main-form">
               
                   <div class="schoolID">
                        <span><b>APC School ID</b></span>
                        <input type="number" name="name" id="name" onchange="showUser(this.value)" required>
                    </div>
                    
                    <div class="sbj">
                        <span><b>Subject of the meeting</b></span>
                        <!-- <input type="sbjtxt" name="subject" id="subject" placeholder="Subject"> -->
                        <select id="defsubj" name="defsubj">
                            <option></option>
                            <option value="Subject 1">Subject 1</option>
                            <option value="Subject 2">Subject 2</option>
                            <option value="Subject 3">Subject 3</option>
                        </select>
                    </div>
                    
                    <div class="sbj">
                        <span><b>Premise</b></span>
                        <!-- <input type="sbjtxt" name="subject" id="subject" placeholder="Subject"> -->
                        <select id="prem" name="prem">
                            <option></option>
                            <option value="Online">Online</option>
                            <option value="School Premise">School Premises</option>
                        </select>
                    </div>
                    
                    <div class="tmedetails">
                        <span><b>Time of Appointment</b></span>
                        <input type="time" name="time" id="time" placeholder="">
                    </div>
                    <div class="setdate">
                        <span><b>Date of Appointment</b></span>
                        <input type="date" name="date" id="date" placeholder="Date" required>
                    </div>
                    
                    <div id="a-submit">
                        <input type="submit" value="SUBMIT" id="submit" style="background-color: #ddd900; color: black; font-size: 16px; cursor: pointer;">
                    </div>

                </form>
            </div>
        </div>

        

    </div>
</body>

<script>
                            function showUser(str) {
                            if (str=="") {
                                document.getElementById("txtoutput").innerHTML="";
                                return;
                            }
                            var xmlhttp=new XMLHttpRequest();
                            xmlhttp.onreadystatechange=function() {
                                if (this.readyState==4 && this.status==200) {
                                document.getElementById("txtoutput").innerHTML=this.responseText;
                                }
                            }
                            xmlhttp.open("GET","components/studentselect.php?q="+str,true);
                            
                            xmlhttp.send();
                            }
                            
 </script>

</html>