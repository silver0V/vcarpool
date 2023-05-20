<?php
include 'conn.php';

$email = $_POST ['email'];
$pass = $_POST ['password'];
    
$sql = "SELECT * FROM tbluser WHERE email = '$email' AND password = '$pass' AND verified = '2'";
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

        $id = $row['userID'];

        if ($row ['email'] === $email && $row ['password'] === $pass && $row ['verified'] = '2'){
            if ($row ['userType'] == 1){
                header("Location: adminpg.php");
            } else if ($row ['userType'] == 2 || $row ['userType'] == 3){
                header("Location: landingpg.php?user=".$id);
            }
        }else{?>
            <script>
            window.alert('Please verify your account first before logging in.');
            window.location.href='index.php';
            unset($_SESSION['Email']);
            unset($_SESSION['Password']);
            </script>
            <?php
        }

    }else {?>
    
        <script>
        window.alert('Please check your credentials. Make sure you are verified.');
        window.location.href='index.php';
        unset($_SESSION['Email']);
        unset($_SESSION['Password']);
        </script>
   <?php }?>

