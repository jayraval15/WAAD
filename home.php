<?php
session_start();

if(isset($_POST['name'])){
header("location:login_form.php");

}
echo "hello Mr.".$_SESSION['email'];

?>

<form action="logout.php" method="post">

<button type="submit" value="logout">logout</button>
</form>