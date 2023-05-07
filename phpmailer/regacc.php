<?php
include '../conn.php';

$firstName = $_POST['Fname'];
$lastName = $_POST['Lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$contactNum = $_POST['contactNum'];

$sql = "SELECT * FROM tbluser WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 0){
$sql = "INSERT INTO tbluser(firstName, lastName, email, password, contactNum, userType, verified) values('$firstName', '$lastName', '$email', '$pass', '$contactNum', '3', '1');";
$result = mysqli_query($conn, $sql);

// echo "Check email for the next step of registration.";   
    // echo
    // "
    // <script>
    // alert('Check email for the next step of registration.');
    // document.location.href = carpool/login.php
    // </script>
    // "; 
}


?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';
require 'vendor/autoload.php';

$firstName = $_POST['Fname'];
$lastName = $_POST['Lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$contactNum = $_POST['contactNum'];

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'zelver98051@gmail.com';
    $mail->Password = 'tnqsdimutgcbbtto';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // $mail->From='vcarpool47@gmail.com';
    // $mail->FromName='Carpool App';
    $mail->setFrom('zelver98051@gmail.com', 'Carpool App');

    $mail->addAddress($email, $firstName);

    $mail->isHTML(true);

    $mail->Subject = 'User Registration';
    $mail->Body = "<h3>Carpool App</h3> 
                <hr style='height:1px;background-color:black'>
                Good day, this is your final step to use the app. Click the link below to finalize the Carpool App Registration.
                <a href='http://localhost/carpool/verified.php?email=$email'>Verifying Email Address</a>";

    $mail->send();

    echo
    "
    <script>
    alert('Check email for the next step of registration.');
    window.location.href = '../index.php';
    </script>
    ";
    // header("Location: index.php");

}
?>