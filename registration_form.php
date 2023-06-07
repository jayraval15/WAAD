<?php


include "contion.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>sig in Form</title>
<link rel="stylesheet" href="r_style.css">
</head>
<body>

<div class="form_body">
<img src="avatar1.png">
<p class="text">User Login</p>

<form class="login_form" action="r_f_contion.php" method="post">
    <input type="file" name="pic" id="">
<input type="text" name="name" placeholder="Enter yor name" required><br>
<input type="email" name="email" placeholder="Enter yor email" required><br>
<input type="password" name="pass" placeholder="Enter yor password" required><br>
<input type="password" name="cpass" placeholder="Enter yor match password" required><br>
<input type="number" name="mob" placeholder="Enter yor number" required><br>
<div class="gender">
<input type="radio" style="height: 20px" name="gander" id="" value="1" Male>
<input type="radio" style="height: 20px" name="gander" id="" value="2" Female>
</div>
<input type="text" name="city" placeholder="Enter yor city" id="" required>
<input type="date" name="dob" id="" required>
<input type="text" name="latitude" placeholder="Enter yor latitude"  id="" required>
<input type="text" name="longitude" placeholder="Enter yor longitude" id="" required>

<button type="submit" name="login">sig in</button>
<br><br><br><br>
<div  style="-webkit-text-fill-color:aliceblue"> pless enter the new user req <a href="login_form.php">log in</a></div>
</form>

</div>

</body>
</html> 