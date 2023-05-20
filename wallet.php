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
<div class="">
    <h1 style="text-align: center;">Your Wallet</h1>
    <h3>Your Tickets:</h3>
    <?php 
        $sql = "SELECT * FROM tbluser WHERE userID='$user'";
        $query = $conn->query($sql);
        if (mysqli_num_rows($query) > 0){
            while ($row = $query->fetch_array()){
                echo $row['uBalance'];
            }
        }?>
    <br>
    <h3>Request for:</h3>
    <a href="cashIn.php?user=<?php echo $user?>"><button class="btn-car">Cash In</button></a>
    <a href="cashOut.php?user=<?php echo $user?>"><button class="btn-car">Cash Out</button></a>

</div>


</body>
</html>