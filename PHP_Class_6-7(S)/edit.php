<?php
include "Classes/User.php";
$user1=new User();
$id = $_GET['id'];
$data=$user1->edit_user($id);
$row=mysqli_fetch_assoc($data);
if(isset($_POST['update_user'])){
    $user1->update_user($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-OOP</title>
    <!-- CSS files -->
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- CRUD Operations -->
<div class="container">
   <div class="row justify-content-center my-5">
    <div class="col-lg-4">
        <!-- Form Start -->
        <form action="" method="POST" class="shadow p-5">
            <h2 class="text-primary text-center display-6 mb-3">User Info.</h2>
         <div class="form-group mb-3">
            <input type="hidden" name="id"value="<?php echo $row['id'];?>">
            <input type="text" name="name" placeholder="Enter your name" class="form-control"value="<?php echo $row['name'];?>">
         </div>
          <div class="form-group mb-3">
            <input type="email" name="email" placeholder="Enter your email" class="form-control"value="<?php echo $row['email'];?>">
         </div>
          <div class="form-group mb-3">
            <input type="password" name="password" placeholder="Enter your password" class="form-control" value="<?php echo $row['password'];?>">
         </div>
          <div class="form-group mb-3">
            <input type="submit" value="Update User" class="btn btn-success" name="update_user">
         </div>
        </form>
    </div>
   </div>
</div>

    <!-- JS files -->
    <!-- Jquery JS -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Main JS -->
    <script src="js/app.js"></script>
</body>
</html>