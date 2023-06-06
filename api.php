<?php
require_once("contion.php");

$jsonedata = file_get_contents("php://input");
$data= json_decode($jsonedata,true);

$tampname = $_FILES['image']['tmp_name'];
$target_folder = "photo";
$target_filename = $_FILES['image']['name'];
$target_filesize =$_FILES['image']['size'];
$target_fileerror = $_FILES['image']['error'];
$target_filetype = $_FILES['image']['type'];

$target_file = $target_folder."/".basename($target_filename);

if($target_filesize > 2097152){
    $error[]= "you file musst be 2MB";
}

if($target_fileerror==0){
    $file_status = move_uploaded_file($tampname,$target_file);
}

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
$photo = $_FILES['image']['name'];

$query = "INSERT INTO `$tablename` (`image`,`name`,`email`,`pass`,`cpass`,`mob`,`gender`,`city`,`dob`,`latitude`,`longitude`) 
value ('{$photo}','{$name}','{$email}','{$pass}','{$cpass}','{$mob}','{$gender}','{$city}','{$dob}','{$latitude}','{$longitude}')";

$result = mysqli_query($conn,$query);

if($result==1){
    $stetus = 1;
    $massge = "CONECTION DONE";
}else{
    $stetus = 0;
    $massge = "CONECTION NOT DONE";
}
$arr=[
    'massge'=>$massge,
    'stetus'=>$stetus
];
echo json_encode($arr,JSON_PRETTY_PRINT);

?>