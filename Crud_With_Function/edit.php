<?php
include "function.php";
$id = $_GET['user_id'];
$all = findStudent($id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- CSS files -->
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3 mt-5">

         <?php
            if(isset($_POST['edit'])){
                editStudent($_POST,$id);
                }
            ?>
            <a href="show.php" class="btn btn-primary">Show</a>
            <form action="" method="POST">
            <div class="form-group mt-3">
                <label for="name">Student Name</label>
                <input id="name" type="text" class="form-control" name="name" value="<?php echo $all['name']; ?>">
            </div>
            <div class="form-group mt-3">
                <label for="fName">Father's Name</label>
                <input id="fName" type="text" class="form-control" name="fName" value="<?php echo $all['fName']; ?>">
            </div>
            <div class="form-group mt-3">
                <label for="mName">Mother's Name</label>
                <input id="mName" type="text" class="form-control" name="mName" value="<?php echo $all['mName']; ?>">
            </div>
            <div class="form-group mt-3">
                <label for="email">Email Address</label>
                <input id="email" type="text" class="form-control" name="email" value="<?php echo $all['email']; ?>">
            </div>
            <div class="form-group mt-3">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <?php
                        if($all['status'] == 1){
                            echo '<option value="1">Active</option>';
                        }
                        else{
                            echo '<option value="2">Inactive</option>';
                        }
                    ?>
                    <option value="">----- Select Status ------</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>
                </select>
                <button name="edit" class="btn btn-info form-control mt-3">Edit</button>
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