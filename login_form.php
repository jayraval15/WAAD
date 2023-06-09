<?php

if(isset($_POST['name'])){
    header("location:home.php");
}
require_once("contion.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form_body"><br>
<p class="text">User Login</p>
<form class="login_form" action="l_f_contion.php" method="post">
<input type="text" name="email" placeholder="Enter you email"><br>
<input type="password" name="pass" placeholder="Password"><br>
<button type="submit" name="login">Login</button>
<br><br><br><br>
<div  style="-webkit-text-fill-color:aliceblue"> pless enter the new user req <a href="registration_form.php">sig in</a></div>
</form>

</div>

</body>
</html>