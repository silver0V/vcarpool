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
        <a class="right" href="index.php?user=<?php echo $user?>">Log Out</a>
        <a class="rightact" href="profile.php?user=<?php echo $user?>">Profile</a>
    </div>
    <br>
    <div class="profile">
        <h1 style="text-align: center;">Your Profile</h1>
        <?php
        $sql = "SELECT * FROM tbluser WHERE userID='$user'";
        $query = $conn->query($sql);

        if(mysqli_num_rows($query) > 0){
            while ($row = $query->fetch_array()){
                ?>
                <span class="title">First Name<br></span><?php echo $row['firstName']; ?><br>
                <span class="title">Last Name<br></span><?php echo $row['lastName']; ?><br>
                <span class="title">Email<br></span><?php echo $row['email']; ?><br>
                <span class="title">Password<br></span><?php echo $row['password']; ?><br>
                <span class="title">Contact Number<br></span><?php echo $row['contactNum']; ?><br>
                <span class="title">Valid ID<br></span><?php echo $row['validID']; ?><br>
     <?php } ?>
                <a href="updateProf.php?user=<?php echo $user?>"><button type="button" class="updatebtn">Edit Profile</button></a>
    <?php  } ?>

        <?php
        $driver = "Driver's License";
        $sql = "SELECT * FROM tbluser WHERE validID='$driver'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
                if($row['validID'] == $driver){
                    ?>
                    <h1 style="text-align: center;">Your Cars</h1>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Car Brand</th>
                                    <th>Car Model</th>
                                    <th>No. of Seats</th>
                                    <th>License Plate</th>
                                    <th>Car Type</th>
                                    <th>Car Color</th>
                                    <th>Chassis Number</th>
                                    <th>Engine Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM tblcar WHERE userID='$user' AND carStatus='approved'";
                                $query = $conn->query($sql);

                                if (mysqli_num_rows($query) > 0){
                                    while ($row = $query->fetch_array()){
                                        ?>
                                        <tr>
                                            <td><?php echo $row["brand"]?></td>
                                            <td><?php echo $row["model"]?></td>
                                            <td><?php echo $row["numSeats"]?></td>
                                            <td><?php echo $row["licensePlate"]?></td>
                                            <td><?php echo $row["carType"]?></td>
                                            <td><?php echo $row["color"]?></td>
                                            <td><?php echo $row["chassisNum"]?></td>
                                            <td><?php echo $row["engineNum"]?></td>
                                            <td><?php echo $row["carStatus"]?></td>
                                        </tr>
                            <?php   }
                                } ?>
                                
                            </tbody>
                        </table>
                    </div>
            <?php    } ?>

    <?php } ?>

    </div>
    
</body>
</html>