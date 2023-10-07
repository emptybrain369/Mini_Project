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

    <h2 align="center">All Employee Information</h2>
   
   
    


<?php
$con=mysqli_connect('localhost','root', '','ems');




$sql="SELECT * FROM employee ORDER BY id ";
$res=mysqli_query($con,$sql);

?>
<table align="center" border="1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Gender</td>
<td>Email</td>
<td>contact</td>
<td>Nid</td>
<td>Address</td>
<td>salary</td>
<td>password</td>
<td>photo</td>
</tr>

<?php
while($row=mysqli_fetch_assoc($res))
{ ?>
<tr>
<td><?php echo $row["id"] ?> </td>
<td><?php echo $row["Name"] ?> </td>
<td><?php echo $row["Gender"] ?> </td>
<td><?php echo $row["Email"] ?> </td>
<td><?php echo $row["Contact"] ?> </td>
<td><?php echo $row["Nid"] ?> </td>
<td><?php echo $row["Address"] ?> </td>
<td><?php echo $row["Salary"] ?> </td>
<td><?php echo $row["Password"] ?> </td>
<td><?php 
echo '<img src="images/'.$row["Photo"].'." style="width: 100px;height: 100px;">';
?> </td>

<td>
<button><a href="delete.php?id=<?php echo $row["id"] ?>">Delete</a></button>
</td>
<td>
<button><a href="update.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["Name"] ?>&email=<?php echo $row["Email"] ?>&gender=<?php echo $row["Gender"] ?>&contact=<?php echo $row["Contact"] ?>&nid=<?php echo $row["Nid"] ?>&address=<?php echo $row["Address"] ?> &salary=<?php echo $row["Salary"] ?>&password=<?php echo $row["Password"] ?>&img=<?php echo $row["Photo"] ?>">Update</a></button>
</td>
</tr>


<?php
}
?>

</table>


</body>
</html>





