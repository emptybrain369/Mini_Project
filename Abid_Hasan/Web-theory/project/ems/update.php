
<?php

session_start();
if (!isset($_SESSION['username'])){
         header("Location:admin_login.php");
}

?>

<?php
$con=mysqli_connect('localhost','root', '','ems');


@$_GET['id'];
@$_GET['name'];
@$_GET['email'];
@$_GET['gender'];
@$_GET['contact'];
@$_GET['nid'];
@$_GET['address'];
@$_GET['salary'];
@$_GET['password'];
@$_GET['img'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<h1 align="center"><?php echo $_SESSION['username']?> Page</h1>
    <nav align="center">
        <a href="viewemp.php">View Employee</a> &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="addemp.php">Add Employee</a>&nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="assignpro.php">Assign Project</a> &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="prostatus.php">Project Status</a>&nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="logout.php">Logout</a> &nbsp &nbsp &nbsp &nbsp &nbsp
    </nav>
    <br> 
    <h2 align="center">Update Employee Information</h2> <br> 



    <form method="get"  align="center">
    Id :
        <input type="number" name="eid" value="<?php echo $_GET['id']?>"> <br> <br>
        Name :
        <input type="text" name="en" value="<?php echo $_GET['name']?>"> <br> <br>
        
        Email :
        <input type="email" name="eem" value="<?php echo $_GET['email']?>"> <br> <br>
         
        Gender : &nbsp
        <input type="text" name="egen"  value="<?php echo $_GET['gender']?>"> 
        <br> <br>
        
        Contact Number :
        <input type="number" name="ecn" value="<?php echo $_GET['contact']?>"> <br> <br>
        Nid Number :
        <input type="number" name="enid" value="<?php echo $_GET['nid']?>"> <br> <br>
        Address :
        <input type="text" name="eaddr" value="<?php echo $_GET['address']?>"> <br> <br>
        Salary :
        <input type="number" name="esalary" value="<?php echo $_GET['salary']?>"> <br> <br>
        Password :
        <input type="password" name="epass" value="<?php echo $_GET['password']?>"> <br> <br>
        Upload your Photo :
        <input type="file" name="ephoto" value="<?php echo $_GET['img']?>"> <br> <br>
        <input type="submit" name="Update" value="Update">
    </form>

    <?php
    if (isset($_GET['Update'])){

        $id=$_GET['eid'];
        $name=$_GET['en'];
        $email=$_GET['eem'];
        $gender=$_GET['egen'];
        $contact=$_GET['ecn'];
        $nid=$_GET['enid'];
        $address=$_GET['eaddr'];
        $salary=$_GET['esalary'];
        $password=$_GET['epass'];
        $img=$_GET['ephoto'];
        
        
        
        
        $sql="UPDATE employee SET id='$id',Name='$name',Email='$email',Gender='$gender',Contact='$contact',Nid='$nid',Address='$address',Salary='$salary',Password='$password',Photo='$img'WHERE
        id='$id'";

       $row=mysqli_query($con,$sql);
      
        if (isset($row)){
            header("Location:viewemp.php");
        }
      
        
}
    ?>
</body>
</html>





