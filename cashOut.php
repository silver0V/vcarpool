<?php 
include 'conn.php';
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
    <a href="carReg.php?user=<?php echo $user?>">Car Registration</a>
    <a href="#about">About</a>
    <a class="right" href="index.php">Log Out</a>
    <a class="right" href="profile.php?user=<?php echo $user?>">Profile</a>
    <a class="rightact" href="wallet.php?user=<?php echo $user?>">Wallet</a>
</div>
<form action="cashoutG.php?user=<?php echo $user?>" method="POST">
    <div class="container">
        <label for="cModel"><b>GCash Reference Number</b></label> <br>
        <input type="text" placeholder="Enter GCash Reference Number" size="20" name="refNum" required>
        <br>
        <label for="cModel"><b>GCash Number</b></label> <br>
        <input type="text" placeholder="Enter GCash Number" size="20" name="gcashNum" required>
        <br>
        <label for="cModel"><b>Cash Out Amount</b></label> <br>
        <input type="text" placeholder="Enter Amount" size="20" name="amount" required>
        <br>
        <button type="submit">Request Cash Out</button>
    </div>
</form>


</body>
</html>