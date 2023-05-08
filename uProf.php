<?php 
include "conn.php";
$user = $_GET['user']; 

$firstName = $_POST['Fname'];
$lastName = $_POST['Lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$contactNum = $_POST['contactNum'];
$validId = $_POST['validID'];

mysqli_query($conn, "UPDATE tbluser SET firstName='$firstName', lastName='$lastName', email='$email', 
password='$pass', contactNum='$contactNum', validID='$validId' WHERE userID='$user'");


?>
<script>
    window.alert('Profile updated successfully');
    window.location.href='profile.php?user=<?php echo $user?>';
</script>
