<?php
require "../connect.php";

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('../phpmailer/vendor/phpmailer/phpmailer/src/Exception.php');
require('../phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php');
require('../phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php');



$id=$_GET['id'];
$prem = $_POST['prem'];
$tm = $_POST['time'];
$dt = $_POST['date'];

$query=mysqli_query($con,"SELECT * FROM appoint where id = '$id'");
$row=mysqli_fetch_array($query);
	
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                                          //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'fakeapcguidance18@gmail.com';             //SMTP username
    $mail->Password   = 'uzxgoacjhkjrqnbh';                   //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fakeapcguidance18@gmail.com', 'Guidance Ofice');
    $mail->addAddress($row['aemail'], $row['aname']);     //Add a recipient           //Name is optional

    //Attachments
    //Add attachments
    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $row['defsubj'] ." Updated Appointment Setting/s";
    $mail->Body    = 
    'I hope this letter finds you well. I am writing to provide you with guidance and to schedule an 
    appointment to discuss matters concerning your  '. $_POST['defsubj'] .' <br>
    It is important to address any concerns or queries you may have to ensure your success as a person. <br>
    <br>
    (Update!!)
    The appointment will will happen <br>
    '. $_POST['prem'] . ' at <br>
    '. $_POST['time'] . " " . $_POST['date'] .'
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br> Thank You
    <br> Guidance Ofice';

    
mysqli_query($con,"UPDATE `appoint` SET `prem`='$prem', `tm`='$tm', `dt`='$dt' WHERE id=".$id);
$mail->send();
header('location: ../guidance.php');


$con->close();

?>