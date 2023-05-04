<?php
include 'conn.php';

$email = $_GET['email'];

$sql = "UPDATE tbluser SET verified = '2' WHERE email = '$email'";
mysqli_query($conn,$sql);

echo
    "
    <script>
    alert('Your account has been verified. You may log in to the app.');
    window.location.href = 'index.php';
    </script>
    ";
?>
<script>
    alert('Your account has been verified. You may log in to the app');
    window.location.href = 'index.php';
</script>


