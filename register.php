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
	<br>
	<h1 style="text-align: center;">Registration Page</h1>
    <form action="phpmailer/regacc.php" method="POST">
        <div class="container">
            <h3>Personal Information</h3>
            First Name<br>
            <input type="text" size="50" name="Fname" placeholder="Enter First Name"> <br>
            <br>
            Last Name<br>
            <input type="text" size="50" name="Lname" placeholder="Enter Last Name"> <br>
            <br>
            Email Address <br>
            <input type="email" size="50" name="email" placeholder="ex: xxxx@gmail.com"> <br>
            <br>
            Password <br>
            <input type="password" size="50" name="password" placeholder="Enter Password"> <br>
            <br>
            Contact Number <br>
            <input type="tel" size="50"  name="contactNum" placeholder="ex: 09XXXXXXXXX"> <br>
            <br>        
            <button type="submit" name="send">Register</button>
        </div>
    </form>
</body>
</html>