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
    <a href="adminpg.php">Home</a>
    <a href="#reports">Reports</a>
    <a class="active" href="carverify.php">Car Verification</a>
    <a href="userlist.php">List of Users</a>
    <a class="right" href="index.php">Log Out</a>
    <a class="right" href="#">Profile</a>
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
          <th>Actions</th>
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
              <td>
              <a href="carYes.php?id=<?php echo $row['carID'];?>"><button class="btn-car">Approve</button></a>
              <a href="carNo.php?id=<?php echo $row['carID'];?>"><button class="btn-car">Decline</button></a>
              </td>
            </tr>
  
        <?php }  }?>
      </tbody>
    </table>
  </div>

</div>

</body>
</html>