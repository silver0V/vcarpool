<?php
include  "conn.php";
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
  <a href="landingpg.php?user=<?php echo $user?>">Home</a>
  <a href="#booking">Booking</a>
  <a class="active" href="carReg.php?user=<?php echo $user?>">Car Registration</a>
  <a href="#about">About</a>
  <a class="right" href="index.php">Log Out</a>
  <a class="right" href="profile.php?user=<?php echo $user?>">Profile</a>
</div>

<br>
    <form action="carRegG.php?user=<?php echo $user ?>" method="POST">
    <h1 style="text-align: center;">Car Registration Page</h1>

    <div class="container">
        <label for="cModel"><b>Car Brand</b></label> <br>
        <input type="text" placeholder="Enter Brand" size="20" name="cBrand" required>
        <br>
        <label for="cModel"><b>Car Model</b></label> <br>
        <input type="text" placeholder="Enter Model" size="20" name="cModel" required>
        <br>
        <label for="cSeats"><b>Number of Seats</b></label>  <br>
        <input type="text" placeholder="Enter Number of Seats" size="20" name="cSeats" required>
        <br>
        <label for="cLPlate"><b>License Plate</b></label>  <br>
        <input type="text" placeholder="ex: CBR7842" size="20" name="cLPlate" required>
        <br>
        <label for="cCType"><b>Car Type</b></label>  <br>
        <input type="text" placeholder="ex: SUV" size="20" name="cCType" required>
        <br>
        <label for="cColor"><b>Car Color</b></label>  <br>
        <input type="text" placeholder="ex: Gray" size="20" name="cColor" required>
        <br>
        <label for="cChassis"><b>Chassis Number / VIN</b></label>  <br>
        <input type="text" placeholder="ex: 2H2XA59BWDY987665" size="20" name="cChassis" required>
        <br>
        <label for="cEngine"><b>Engine Number</b></label>  <br>
        <input type="text" placeholder="ex: 52WVC10338" size="20" name="cEngine" required>
        <br>
        <button type="submit">Register Car</button>
    </div>
</form>
</body>
</html>