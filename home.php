<?php
include "contion.php";

if(isset($_POST['name'])){
header("location:login_form.php");

}
echo "hello Mr.".$_SESSION['email'];

?>

<form action="logout.php" method="post">
    
    <?php
    $id = $_SESSION['id'];
    $query = mysqli_query($conn, "SELECT * FROM `waad-project` where `id` = '$id'");
if(mysqli_num_rows($query) > 0)
$result = mysqli_fetch_assoc($query);

if($result['image'] == ""){
    echo '<img scr="project.png">';
}else{
    echo '<img src="photo/'.$result["image"].'" style="height: 100px">';
}
    ?>

<button type="submit" value="logout">logout</button>
</form>