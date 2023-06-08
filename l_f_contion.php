<?php
include "contion.php";

if(isset($_POST["login"])){
    
$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "SELECT * FROM `waad-project` where `email`='$email' and `pass`='$pass'";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

if(mysqli_fetch_row($result)){
    $_SESSION['pass'] = $row['pass'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
}else{
    echo "this user not velid";
}

}

?>