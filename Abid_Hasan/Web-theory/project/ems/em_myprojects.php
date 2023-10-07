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
    <h1 align="center"><?php echo $_SESSION['username']?></h1>
    <nav align="center">
        <a href="em_myprofile.php">My Profile</a> &nbsp &nbsp &nbsp &nbsp &nbsp
        
        <a href="em_myprojects.php">My Projects</a> &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="logout.php">Logout</a> &nbsp &nbsp &nbsp &nbsp &nbsp
    </nav>
    <br> 
 <h2 align="center">My Projects</h2>
 <?php
 $con=mysqli_connect('localhost','root', '','ems');
    
$user = $_SESSION['username'];



$sql="SELECT project.id, project.projectname, project.duedate, employee.Name
FROM project  
LEFT JOIN employee  
ON project.id=employee.id WHERE employee.Name='$user'";



$res=mysqli_query($con,$sql);

?>
<table align="center" border="1">
<tr>
<td>ID</td>
<td>Project Name</td>
<td>Due Date</td>
<td>Employee Name</td>

</tr>

<?php
while($row=mysqli_fetch_assoc($res))
{ ?>
<tr>
<td><?php echo $row["id"] ?> </td>
<td><?php echo $row["projectname"] ?> </td>
<td><?php echo $row["duedate"] ?> </td>
<td><?php echo $row["Name"] ?> </td>



</tr>

<?php
}
?>
</table>
</body>
</html>