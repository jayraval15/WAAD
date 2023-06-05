<?php
$hostname = "localhost";
$user = "root";
$dbpass = "";
$dbname = "waad";
$tablename = "waad-project";

$conn = mysqli_connect($hostname,$user,$dbpass,$dbname) or die("CONTION ERROR");

if($conn){
    echo "";
}else{
    echo "CONNTION IF ERRor";
}

?>
