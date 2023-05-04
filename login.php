<?php
include 'conn.php';

$email = $_POST ['email'];
$pass = $_POST ['password'];
    
$sql = "SELECT * FROM tbluser WHERE email = '$email' AND password = '$pass'";
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

        $id = $row['userID'];

        if ($row ['email'] === $email && $row ['password'] === $pass ){
            if ($row ['userType'] == 1){
                header("Location: adminpg.php?user=".$id);
            } else if ($row ['userType'] == 2 || $row ['userType'] == 3){
                header("Location: landingpg.php?user=".$id);
            }
        }

    }else {?>
    
        <script>
        window.alert('User not Found!');
        window.location.href='index.php';
        unset($_SESSION['Email']);
        unset($_SESSION['Password']);
        </script>
   <?php }?>

