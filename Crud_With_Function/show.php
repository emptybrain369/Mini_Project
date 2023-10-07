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
        <?php
        include "function.php";
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            deleteStudent($id);
        }
        if(isset($_GET['inactive'])){
            $id = $_GET['inactive'];
            active($id);
        }
        if(isset($_GET['active'])){
            $id = $_GET['active'];
            inactive($id);
        }
        ?>
        <div class="col-md-8 offset-md-2 mt-5">
        <a href="index.php" class="btn btn-primary mb-3">Add Student</a>
            <table class="table">
                <thead>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
                </thead>
                <?php
                $data = show();
                $sl=1;
                while($all = $data->fetch_assoc()){
                        if($all['status'] == 1){
                            $status = "<a href='show.php?active=".$all['student_id']."' class='btn btn-success btn-sm'>Active</a>";
                        }
                        else{
                            $status = "<a href='show.php?inactive=".$all['student_id']."' class='btn btn-success btn-sm'>Inactive</a>";
                        }
                       echo "<tr>
                          <td>".$sl."</td> 
                          <td>".$all['name']."</td>
                          <td>".$all['fName']."</td>
                          <td>".$all['mName']."</td>
                          <td>".$all['email']."</td>
                          <td>".$status."</td>
                          <td><a href='show.php?id=".$all['student_id']."' class='btn btn-danger btn-sm'><i class='fa-solid fa-trash'></i></a></td>
                          <td><a href='edit.php?user_id=".$all['student_id']."' class='btn btn-success btn-sm'><i class='fa-solid fa-edit'></i></a></td>
                          </tr>";
                          $sl++;
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