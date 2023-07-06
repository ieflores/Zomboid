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

$aid = $_POST['name'];
$aname = $_POST['aname'];
$aemail = $_POST['aemail'];
$sbj = $_POST['defsubj'];
$prem = $_POST['prem'];
$tm = $_POST['time'];
$dt = $_POST['date'];

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
    $mail->addAddress($_POST['aemail'], $_POST['aname']);     //Add a recipient           //Name is optional

    //Attachments
    //Add attachments
    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $_POST['defsubj'];
    $mail->Body    = 
    'I hope this letter finds you well. I am writing to provide you with guidance and to schedule an 
    appointment to discuss matters concerning your  '. $_POST['defsubj'] .' <br>
    It is important to address any concerns or queries you may have to ensure your success as a person. <br>
    <br>
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

   

$sql = "INSERT INTO appoint (aid, aname, aemail, sbj, prem, tm, dt)
    VALUES ('$aid', '$aname', '$aemail', '$sbj' , '$prem', '$tm', '$dt')";
    
if ($con->query($sql) === TRUE) {
echo "New record created successfully";
$mail->send();
header('location: ../guidanceAppoint.php');
} else {
echo "Error: " . $sql . "<br>" . $con->error;      
}

$con->close();

?>