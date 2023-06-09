<?php
include "contion.php";

if(isset($_POST['submit'])){
    $id = $_GET['id'];
$email = $_POST['email'];
$pass = $_POST['pass'];

    $query = "SELECT * FROM `email`='$email' and `pass`='$pass' where `id`='$id'";

    $result = mysqli_fetch_row($result);

    if($result==1){
        echo "";
    }else{
        echo "select error";
    }
}


?>