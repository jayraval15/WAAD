<?php
require_once("contion.php");

$jsonedata = file_get_contents("php://input");
$data = json_decode($jsonedata,true);

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

$query = "INSERT INTO `$tablename`(`name`,`email`,`pass`,`cpass`,`mob`,`gender`,`city`,`dob`,`latitude`,`longitude`) 
value ('$name','$email','$pass','$cpass','$mob','$gender','$city','$dob','$latitude','$longitude')";

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