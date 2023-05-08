<?php
include "conn.php";
$user = $_GET['user']; 

$sql = "SELECT * FROM tbluser WHERE userID='$user'";
$query = $conn->query($sql);
$row = $query->fetch_array();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Carpool App</title>
</head>
<body>
	<br>
	<h1 style="text-align: center;">Registration Page</h1>
    <form action="uProf.php?user=<?php echo $user?>" method="POST">
        <div class="container">
            <h3>Personal Information</h3>
            First Name<br>
            <input type="text" name="Fname" value="<?php echo $row['firstName'];?>"> <br>
            <br>
            Last Name<br>
            <input type="text" name="Lname" value="<?php echo $row['lastName'];?>"> <br>
            <br>
            Email Address <br>
            <input type="text" name="email" value="<?php echo $row['email'];?>"> <br>
            <br>
            Password <br>
            <input type="text" name="password" value="<?php echo $row['password'];?>"> <br>
            <br>
            Contact Number <br>
            <input type="text" name="contactNum" value="<?php echo $row['contactNum'];?>"> <br>
            <br>        
            Valid ID <br>
            <input type="text" name="validID" value="<?php echo $row['validID'];?>"> <br>
            <br>     
            <button type="submit" name="send">Update</button>
        </div>
    </form>
</body>
</html>