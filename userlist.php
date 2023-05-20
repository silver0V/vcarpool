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
    <a href="carverify.php">Car Verification</a>
    <a class="active" href="userlist.php">List of Users</a>
    <a class="right" href="index.php">Log Out</a>
    <a class="right" href="#">Profile</a>
</div>

<div class="car-verify">
<h1 style="text-align: center;">List of Verified Users</h1>
  <div>
    <table>
      <thead>
        <tr>
          <th>User ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email Address</th>
          <th>Contact No.</th>
          <th>Valid ID</th>
          <th>Date Registered</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $sql = "SELECT * FROM tbluser WHERE verified='2'";
        $query = $conn->query($sql);
    
    
        if (mysqli_num_rows($query) > 0){ 
    
        while ($row = $query->fetch_array()) {
            ?>
            <tr>
              <td><?php echo $row["userID"]?></td>
              <td><?php echo $row["firstName"]?></td>
              <td><?php echo $row["lastName"]?></td>
              <td><?php echo $row["email"]?></td>
              <td><?php echo $row["contactNum"]?></td>
              <td><?php echo $row["validID"]?></td>
              <td><?php echo $row["dateRegister"]?></td>
            </tr>
  
        <?php }  }?>
      </tbody>
    </table>
  </div>

</div>

</body>
</html>