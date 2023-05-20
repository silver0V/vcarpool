<?php
include 'conn.php';
$user = $_GET['user']; 

$refNum = $_POST['refNum'];
$gcashNum = $_POST['gcashNum'];
$amount = $_POST['amount']; //50

$totalAmnt = $amount * $quan; // 50 * 3 = 150
$conFee = $totalAmnt / 5; // 150 / 5 = 30
if($amount == '50.00'){
    $ticket =  40.00 * $quan; // 40* 3 = 120
}else if($amount == '100.00'){
    $ticket =  80.00 * $quan;
}else if($amount == '250.00'){
    $ticket =  200.00 * $quan;
}else if($amount == '500.00'){
    $ticket =  450.00 * $quan;
}

mysqli_query($conn, "INSERT INTO tbltransaction (userID, refNum, gcashNum, amount, conFee, proFee, transType, request) 
VALUES ('$user', '$refNum', '$gcashNum', '$totalAmnt', '$conFee', '0', 'cash in', 'approved')");
mysqli_query($conn, "UPDATE tbluser SET uBalance='$ticket' WHERE userID='$user'");

?>
<script>
    window.alert('Cashed in successfully');
    window.location.href='wallet.php?user=<?php echo $user?>';
</script>

