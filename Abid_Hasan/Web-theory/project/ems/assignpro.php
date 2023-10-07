<?php

session_start();
if (!isset($_SESSION['username'])){
         header("Location:admin_login.php");
}

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
    <h2 align="center">Assign Project</h2> <br> 
    <form action= "" method="post" align="center">
         Employee Id :
        <input type="number" name="eid"> <br> <br>
         Project Name :
        <input type="text" name="aproname"> <br> <br>
         Due Date :
        <input type="date" name="duedate"> <br> <br>
        
        <input type="submit" name="submit" value="Submit" onclick="successmsg()">
    </form>


<?php
$con=mysqli_connect('localhost','root', '','ems');

if (isset( $_POST['submit'])) {
$id=$_POST['eid'];
$proname=$_POST['aproname'];
$date=$_POST['duedate'];


$sql="insert into project(id,projectname,duedate) values('$id','$proname','$date')";
$res= mysqli_query($con,$sql);
 

}
?>



</body>
</html>