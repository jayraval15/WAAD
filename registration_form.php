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
    <br>
<img src="photo/3135715.png" id="image">
<p class="text">User Login</p>

<form class="login_form" action="r_f_contion.php" method="post" enctype="multipart/form-data">
    <input type="file" hidden name="pic" id="photo">
<input type="text" name="name" placeholder="Enter yor name" required><br>
<input type="email" name="email" placeholder="Enter yor email" required><br>
<input type="password" name="pass" placeholder="Enter yor password" required><br>
<input type="password" name="cpass" placeholder="Enter yor match password" required><br>
<input type="number" name="mob" placeholder="Enter yor number" required><br>
<input type="text" name="gender" id="" placeholder="Enter the gender">
<input type="text" name="city" placeholder="Enter yor city" id="" required>
<input type="date" name="dob" id="" required>
<input type="text" name="latitude" placeholder="Enter yor latitude"  id="" required>
<input type="text" name="longitude" placeholder="Enter yor longitude" id="" required>

<button type="submit" name="login">sig in</button>
<br><br><br><br>
<div  style="-webkit-text-fill-color:aliceblue"> pless enter the new user req <a href="login_form.php">log in</a></div>
</form>

</div>

<script>
    // const x = document.getElementById('image');
    // const y = document.getElementById('photo');
    // x.addEventListener('click',()=>{
    // y.click();
    // });

        var image = document.querySelector("photo"),
        input = document.querySelector("input");
        input.addEventListener("change", function() {
    image.src = URL.createObjectURL(input.files[0]);
        });

        var imageinput = document.getElementById('photo');
        var image = document.getElementById('image');
        image.addEventListener("click", ()=>{
            imageinput.click();
        } );
  
</script>
</body>
</html> 