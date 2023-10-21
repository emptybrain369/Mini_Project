<?php
include "classes/Fruits.php";
$s1= new Fruits();
if (isset($_POST['add_fruit'])){
$s1->add_fruit($_POST);
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $s1->deleteItem($id);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD USING OOP</title>
    <!-- CSS files -->
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="fruit my-4 shadow p-4 rounded">
                <h1 class="text-center text-danger mb-4">Enter Fruits</h1>

                <?php 
                if(isset($_SESSION['message'])){
                    echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
                   {$_SESSION['message']}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'><button>
                  </div>";
                }
                ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                <input type="text" name="fruit_name" placeholder="Enter Fruit's Name" class="form-control">
                </div>
                <div class="form-group mb-3">
                <input type="text" name="fruit_qty" placeholder="Enter Quantity" class="form-control">
                </div>
                <div class="form-group mb-3">
                <input type="file" name="fruit_img" class="form-control">
                </div>
                <div class="form-group mb-3">
                <input type="text" name="fruit_price" placeholder="Enter Price" class="form-control">
                </div>
                <div class="form-group mb-3">
                <input type="submit" name="add_fruit" value="Submit Fruit" class="btn btn-dark">
                </div>
            </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Table -->
                <table class="table table-bordered">
        <thead>
            <tr>
                <th>#SL</th>
                <th>Fruits Name</th>
                <th>Fruits Quantity</th>
                <th>Fruits Image</th>
                <th>Fruits Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data=$s1->showData();
            $i=1;
            if(mysqli_num_rows($data)>0){
                foreach($data as $fruitsItem){
                    ?>
            <tr>
            <td><?php echo $i++?></td>
            <td><?php echo $fruitsItem['f_name']?></td>
            <td><?php echo $fruitsItem['f_qty']?></td>
            <td>
            <img src="<?php echo "upload/".$fruitsItem['f_img']?>" alt="" width="100px" height="100px">
           </td>
            <td><?php echo $fruitsItem['f_price']?></td>
            <td>
                <a href="" class="btn btn-sm btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="php8_2.php?id=<?=$fruitsItem['id']?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
            </tr>
            <?php
                }
            }else{?>
            <tr>
                <td colspan="6" class="text-center"><?php echo "Not Record Found ";?></td>
            </tr>
            <?php
            }
            
            //print_r($fruitsItem);
            ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
    <!-- JS files -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>