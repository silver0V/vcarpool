<?php 
include "conn.php";
$user = $_GET['user']; 

$firstName = $_POST['Fname'];
$lastName = $_POST['Lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$contactNum = $_POST['contactNum'];

mysqli_query($conn, "UPDATE tbluser SET firstName='$firstName', lastName='$lastName', email='$email', 
password='$pass', contactNum='$contactNum' WHERE userID='$user'");
?>
