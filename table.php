<?php 
include "contion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="table.css">
</head>
<body>
<section class="intro">
  <div class="gradient-custom-1 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive bg-white">
              <table class="table mb-0">
                <thead class="table mb-0" >
                <tr>
            <th scope="col">#</th>
            <th scope="col">UPLODE-IMAGE</th>
            <th scope="col">USERNAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">NUMBER</th>
            <th scope="col">GENDER</th>
            <th scope="col">CITY</th>
            <th scope="col">location</th>
            <th scope="col">Actions</th>
          </tr>
                </thead>
                <tbody class="t">
                <?php
            $query = "SELECT * FROM `waad-project`" or die("query failed");
            $result = mysqli_query($conn,$query) ;

            if(mysqli_fetch_row($result) > 0){
                $sr = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    
            ?>
        
          <tr>
            <th scope="row"><?php echo $sr++; ?></th>
            <td><?php echo $row['image']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mob']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['latitude']; ?></td>
          </tr>
          <?php  

}
}
          ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>