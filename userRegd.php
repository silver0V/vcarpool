<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
</head>
<body>
    <h1>List of Registered Users</h1>
    <?php
    include 'conn.php';
    echo "<table border = '1' width = '500' cellspacing = '0'>";
    echo "<tr style = color:blue =>";
    echo "<tr style = color:blue =>";
    echo "<td> <strong> ID </strong> </td>";
    echo "<td> <strong> First Name </strong> </td>";
    echo "<td> <strong> Last Name </strong> </td>";
    echo "<td> <strong> Email </strong> </td>";
    echo "<td> <strong> Password </strong> </td>";
    echo "<td> <strong> Contact Number </strong> </td>";
    echo "</tr><br/>";

    $sql = "SELECT * FROM tbluser";
    $query = $conn->query($sql);
    $iterate = 0;
    while ($row = $query->fetch_array()) {
    ?>
    <tr>
        <td><?php echo $row['userID']; ?></td>
        <td><?php echo $row['firstName']; ?></td>
        <td><?php echo $row['lastName']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['contactNum']; ?></td>
    </tr>
    <?php
        $iterate++;
    }
    ?>
</body>
</html>