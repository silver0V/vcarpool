<?php
include 'conn.php';
$user = $_GET['user']; 

$brand = $_POST['cBrand'];
$model = $_POST['cModel'];
$numSeat = $_POST['cSeats'];
$licenseP = $_POST['cLPlate'];
$carType = $_POST['cCType'];
$color = $_POST['cColor'];
$chassis = $_POST['cChassis'];
$engine = $_POST['cEngine'];

$sql = "SELECT * FROM tbluser WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 0){
$sql = "INSERT INTO tblcar (userID, brand, model, numSeats, licensePlate, carType, color, chassisNum, engineNum, carStatus) 
VALUES ('$user', '$brand', '$model', '$numSeat', '$licenseP', '$carType', '$color', '$chassis', '$engine', 'in process')";
$result = mysqli_query($conn, $sql);
}else{
    echo 'error';
}
?>
<script>
    window.alert('Car registered successfully');
    window.location.href='carReg.php?user=<?php echo $user?>';
</script>

