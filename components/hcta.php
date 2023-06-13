<!--- call to action--->

<section class="cta">
    <h1>INQUIRE NOW</h1>
    <?php if($_SESSION["position"] == "student"){?>
        <a href="inquirystudent.php" class="hero-btn">Inquire</a>
    <?php } elseif($_SESSION["position"] == "faculty"){?>
        <a href="inquiryfaculty.php" class="hero-btn">Inquire</a>
    <?php } else{}?>
</section>