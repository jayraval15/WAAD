<?php


include "contion.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>sig in Form</title>
<link rel="stylesheet" href="r_style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="form.js">
</head>
<body>

<div class="form_body">
    <br>
<img src="photo/istockphoto-1300845620-612x612.jpg" id="image">
<p class="text">User Login</p>

<form class="login_form" action="r_f_contion.php" method="post" enctype="multipart/form-data">
    <input type="file" hidden name="pic" id="photo">
<input type="text" name="name" placeholder="Enter yor name" required><br>
<input type="email" name="email" placeholder="Enter yor email" required><br>
<input type="password" name="pass" placeholder="Enter yor password" id="pass"  required><br>
<input type="password" name="cpass" placeholder="Enter yor match password" id="cpass" required></br>
<input type="number" name="mob" placeholder="Enter yor number" required><br>
<input type="text" name="gender" id="" placeholder="Enter the gender" required><br>
<input type="text" name="city" placeholder="Enter yor city" id="" required><br>
<input type="date" name="dob" id="" required><br>
<input type="text" name="latitude" placeholder="Enter yor latitude"  id="" required><br>
<input type="text" name="longitude" placeholder="Enter yor longitude" id="" required><br>

<button type="submit" onclick="myfun()" name="login">sig in</button>
<br><br><br><br>
<div  style="-webkit-text-fill-color:aliceblue"> pless enter the new user req <a href="login_form.php">log in</a></div>
</form>

</div>

<script>  

                 
        function myfun(){
     var x = document.getElementById("pass").value;
            var y = document.getElementById("cpass").value;

            if(x == ""){
               alert('ples enter thr password');
            }else if(x == y){
                alert("your data saved");
            } else {
                alert("your password not match");

            }
        };
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