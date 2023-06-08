<?php

$tampname = $_FILES['pic']['tmp_name'];
$target_folder = "photo";
$target_filename = $_FILES['pic']['name'];
$target_filesize = $_FILES['pic']['size'];
$target_fileerror = $_FILES['pic']['error'];
$target_filetype = $_FILES['pic']['type'];

$target_file = $target_folder."/".basename($target_filename);
 
if($target_filesize > 2097152){
    $error[]= "you file musst be 2MB";
}
if($target_fileerror==0){
    $file_status = move_uploaded_file($tampname,$target_file);
}
require_once("contion.php");

$name = ($_POST['name']);
$email = ($_POST['email']);
$pass = ($_POST['pass']);
$cpass = ($_POST['cpass']);
$mob = ($_POST['mob']);
$gender = ($_POST['gender']);
$city = ($_POST['city']);
$dob = ($_POST['dob']);
$latitude = ($_POST['latitude']);
$longitude = ($_POST['longitude']);
$photo = $_FILES['pic']['name'];

$query = "INSERT INTO `$tablename` (`image`,`name`,`email`,`pass`,`cpass`,`mob`,`gender`,`city`,`dob`,`latitude`,`longitude`) 
value ('{$photo}','{$name}','{$email}','{$pass}','{$cpass}','{$mob}','{$gender}','{$city}','{$dob}','{$latitude}','{$longitude}')";

$result = mysqli_query($conn,$query);

if($result==1){
    echo "";
}else{
    echo "result if erre";
}

?>