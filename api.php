<?php
require_once("contion.php");

$jsonedata = file_get_contents("php://input");
$data = json_decode($jsonedata,true);

$tampname = $_FILES['data']['tmp_name'];
$target_folder = "image";
$target_filename = $_FILES['data']['name'];
$target_filesize =$_FILES['data']['size'];
$target_fileerror = $_FILES['data']['error'];
$target_filetype = $_FILES['data']['type'];

$target_file = $target_folder."/".basename($target_filename);

if($target_filesize > 2097152){
    $error[]= "you file musst be 2MB";
}

if($target_fileerror==0){
    $file_status = move_uploaded_file($tampname,$target_file);
}

$name = ($data['name']);
$email = ($data['email']);
$pass = ($data['pass']);
$cpass = ($data['cpass']);
$mob = ($data['mob']);
$gender = ($data['gender']);
$city = ($data['city']);
$dob = ($data['dob']);
$latitude = ($data['latitude']);
$longitude = ($data['longitude']);

$query = "INSERT INTO `$tablename`(`image`,`name`,`email`,`pass`,`cpass`,`mob`,`gender`,`city`,`dob`,`latitude`,`longitude`) 
value ('$target_filename',$name','$email','$pass','$cpass','$mob','$gender','$city','$dob','$latitude','$longitude')";

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