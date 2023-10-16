<?php 
include "Classes/User.php";
$user1=new User();
if(isset($_POST['add_user'])){
    $user1->add_user($_POST);
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
    <!-- Heading -->
   <div class="row mb-3">
    <div class="col-12">
        <h1 class="bg-primary text-center text-light p-4 display-2">CRUD OPERATIONS</h1>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-4">
        <!-- Form Start -->
        <form action="" method="POST" class="shadow p-5">
            <h2 class="text-primary text-center display-6 mb-3">User Info.</h2>
         <div class="form-group mb-3">
            <input type="text" name="name" placeholder="Enter your name" class="form-control" required>
         </div>
          <div class="form-group mb-3">
            <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
         </div>
          <div class="form-group mb-3">
            <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
         </div>
          <div class="form-group mb-3">
            <input type="submit" value="Add User" class="btn btn-dark" name="add_user">
         </div>
        </form>
    </div>
    <div class="col-lg-8">
        <!-- Table -->
        <table class="table table-striped">
            <tr>
                <th>#SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
            $allUsers=$user1->all_user();
            $i=1;
            while($row=mysqli_fetch_assoc( $allUsers)){?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo ucwords($row['name']); ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                <a href="edit.php?id=<?php echo $row['id'];?>"class="btn btn-secondary btn-sm">Edit</a>
                <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>

            <?php
            }
            ?>
        </table>
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