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
    <form action="login.php" method="POST">
    <h1 style="text-align: center;">Login Page</h1>
    <div class="imgcontainer">
        <img src="img/avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">

        <label for="emailadd"><b>Email</b></label> <br>
        <input type="text" placeholder="Enter Email" size="20" name="email" required>
        <br>
        <label for="password"><b>Password</b></label>  <br>
        <input type="password" placeholder="Enter Password" size="20" name="password" required>
        <br>
        <button type="submit">Login</button>
    </div>
    <span class="password">Don't have an account? <a href="register.php">Register here</a></span>
</form>
</body>
</html>