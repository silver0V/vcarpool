<?php 
include "conn.php";
$id = $_GET['id'];

$decline = "approved";

mysqli_query($conn, "UPDATE tblcar SET carStatus='$decline' WHERE carID='$id'");
header('Location: carverify.php');
?>
