<?php 
include "conn.php";
$id = $_GET['id'];

$approve = "approved";

mysqli_query($conn, "UPDATE tblcar SET carStatus='$approve' WHERE carID='$id'");

?>
