<section class="header">
    <nav>
        <a href="index.php"><img src="images/apclogo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="activities.php">ACTIVITIES</a></li>
                    <?php if($_SESSION["position"] == "student" ){?>
                    <li><a href="Calendar.php">CALENDAR</a></li>
                    <?php } elseif ($_SESSION["position"] == "faculty") {?>
                    <li><a href="CalendarFaculty.php">CALENDAR</a></li>
                    <?php } else {}?>
                    <?php if($_SESSION["position"] == "student" ){?>
                    <li><a href="inquirystudent.php">INQUIRY</a></li>
                    <?php } elseif ($_SESSION["position"] == "faculty") {?>
                    <li><a href="inquiryfaculty.php">INQUIRY</a></li>
                    <?php } else {}?>
                    <?php if ($_SESSION["position"] == "student") {?>
                    <li><a href="faq.php">FAQ</a></li>
                    <?php } elseif ($_SESSION["position"] == "faculty") {?>
                    <li><a href="faq.php">FAQ</a></li>
                    <?php } else {}?>
                    <li><a href="logout.php">LogOut</a></li>
                
                </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>

 <div class="text-box">
    <h1>APC GUIDANCE OFFICE</h1>
    <h3><i>Appointment Management System</i></h3>

 </div>   

</section>
                    <!-- <li><a href="ActAndCont.php">ACTIVITIES AND CONTENT</a></li> -->


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