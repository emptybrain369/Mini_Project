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
   
   <h2 align="center">Project Status</h2>
    


<?php
$con=mysqli_connect('localhost','root', '','ems');




$sql="SELECT project.id, project.projectname, project.duedate, employee.Name
FROM project  
LEFT JOIN employee  
ON project.id=employee.id";

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
<td>
<button><a href="deleteproject.php?id=<?php echo $row["id"] ?>">Delete</a></button>

</td>


</tr>

<?php
}
?>
</table>
</body>
</html>






         









             
            
            
            
            
            
            
            
            
            