<?php
// $hostname = "localhost";
// $user = "id20676639_insorans_23"; // your servar user name.//
// $dbpass = "MKL?php1";  // your servar password.//
// $dbname = "id20676639_life_time_12";  // your servar databesh name.//
// $tablename = "waad-project";  // your servar tablename name.//

$hostname = "localhost";
$user = "root"; // your servar user name.//
$dbpass = "";  // your servar password.//
$dbname = "waad";  // your servar databesh name.//
$tablename = "waad-project";  // your servar tablename name.//

$conn = mysqli_connect($hostname,$user,$dbpass,$dbname) or die("CONTION ERROR");

if($conn){
    echo "";
}else{
    echo "CONNTION IF ERRor";
}

?>
