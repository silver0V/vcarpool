<?php 
$user = $_GET['user'];
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
<div class="topnav">
    <a class="active" href="landingpg.php?user=<?php echo $user?>">Home</a>
    <a href="#booking">Booking</a>
    <a href="carReg.php?user=<?php echo $user?>">Car Registration</a>
    <a href="#about">About</a>
    <a class="right" href="index.php">Log Out</a>
    <a class="right" href="profile.php?user=<?php echo $user?>">Profile</a>
</div>


</body>
</html>