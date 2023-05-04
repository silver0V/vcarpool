<?php
include 'conn.php';
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
    <a class="active" href="admingpg.php">Home</a>
    <a href="#reports">Reports</a>
    <a href="carverify.php?user=<?php echo $user?>">Car Verification</a>
    <a href="#about">Account Level</a>
    <a class="right" href="index.php">Log Out</a>
    <a class="right" href="profile.php?user=<?php echo $user?>">Profile</a>
</div>

<div class="car-verify">
<h1 style="text-align: center;">Car Verification: In Process</h1>
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
        </tr>
      </thead>
      <tbody>
        <?php 
        $sql = "SELECT * FROM tblcar WHERE carStatus='in process'";
        $query = $conn->query($sql);
    
    
        if (mysqli_num_rows($query) > 0){ 
    
        while ($row = $query->fetch_array()) {
            ?>
            <tr>
              <td><?php echo $row["brand"]?></td>
              <td><?php echo $row["model"]?></td>
              <td><?php echo $row["numSeats"]?></td>
              <td><?php echo $row["licensePlate"]?></td>
              <td><?php echo $row["carType"]?></td>
              <td><?php echo $row["color"]?></td>
            </tr>
  
        <?php }  }?>
      </tbody>
    </table>
  </div>

</div>

</body>
</html>