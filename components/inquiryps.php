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

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
    $mail->isSMTP();                                          //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'fakeapcguidance18@gmail.com';             //SMTP username
    $mail->Password   = 'uzxgoacjhkjrqnbh';                   //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());

$iid = $_POST['iid'];
$iname = $_POST['iname'];
$iemail = $_POST['iemail'];
$isbj = $_POST['isbj'];
$others = $_POST['others'];
$others = $_POST['others'];
$imsg = $_POST['imsg'];

$query=mysqli_query($con,"SELECT * FROM accounts where position = 'guidance'");

if ($_POST['isbj'] != "Others"){
    $sql = "INSERT INTO inquiry (iid, iname, iemail, isbj, imsg, idt)
    VALUES ('$iid', '$iname', '$iemail', '$isbj', '$imsg', '$mysqltime')";

    //Recipients
    $mail->setFrom('fakeapcguidance18@gmail.com', 'Guidance Office');
    while ($row=mysqli_fetch_array($query)){
    $mail->addAddress($row['email'], $row['fname']." ".$row['lname']);     //Add a recipient           //Name is optional
    }
    //Attachments
    //Add attachments
    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Inquiry";
    $mail->Body    = 
    ' ID: '. $_POST['iid'] .'<br>
    Name: '. $_POST['iname'] .'<br>
    Email: '. $_POST['iemail'] .'<br>
    Subject: '. $_POST['isbj'] .'<br>
    Inquiry: '. $_POST['imsg'] .'<br>
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

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
        $mail->send();
        header('location: ../inquirystudent.php');
        } else {
        echo "Error: " . $sql . "<br>" . $con->error;      
        }
        
        $con->close();
}
else {
    $sql = "INSERT INTO inquiry (iid, iname, iemail, isbj, imsg, idt)
    VALUES ('$iid', '$iname', '$iemail', '$others', '$imsg', '$mysqltime')";

    //Recipients
    $mail->setFrom('fakeapcguidance18@gmail.com', 'Guidance Office');
    while ($row=mysqli_fetch_array($query)){
    $mail->addAddress($row['email'], $row['fname']." ".$row['lname']);     //Add a recipient           //Name is optional
    }
    //Attachments
    //Add attachments
    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Inquiry";
    $mail->Body    = 
    ' ID: '. $_POST['iid'] .'<br>
    Name: '. $_POST['iname'] .'<br>
    Email: '. $_POST['iemail'] .'<br>
    Subject: '. $_POST['others'] .'<br>
    Inquiry: '. $_POST['imsg'] .'<br>
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

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    $mail->send();
    header('location: ../inquirystudent.php');
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;      
    }
    
    $con->close();
}






    


?>