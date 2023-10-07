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


<h2 align="center">My Profile</h2>

    <?php
$con=mysqli_connect('localhost','root', '','ems');


$user = $_SESSION['username'];

$sql="SELECT * FROM employee WHERE Name='$user' ";
$res=mysqli_query($con,$sql);

?>
<table align="center" border="1">

<?php
while($row=mysqli_fetch_assoc($res))
{ ?>
<tr><td>photo</td>
<td><?php 
echo '<img src="images/'.$row["Photo"].'." style="width: 100px;height: 100px;">';
?> </td>

</tr>
<tr><td>ID</td><td><?php echo $row["id"] ?> </td></tr>
<tr><td>Name</td><td><?php echo $row["Name"] ?> </td></tr>
<tr><td>Gender</td><td><?php echo $row["Gender"] ?> </td></tr>
<tr><td>Email</td><td><?php echo $row["Email"] ?> </td></tr>
<tr><td>contact</td><td><?php echo $row["Contact"] ?> </td></tr>
<tr><td>Nid</td><td><?php echo $row["Nid"] ?> </td></tr>
<tr><td>Address</td><td><?php echo $row["Address"] ?> </td></tr>
<tr><td>salary</td><td><?php echo $row["Salary"] ?> </td></tr>
<tr><td>password</td><td><?php echo $row["Password"] ?> </td></tr>
<tr >

<td colspan="2" ><button>&nbsp &nbsp &nbsp &nbsp &nbsp<a  href="em_updateprofile.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["Name"] ?>&email=<?php echo $row["Email"] ?>&gender=<?php echo $row["Gender"] ?>&contact=<?php echo $row["Contact"] ?>&nid=<?php echo $row["Nid"] ?>&address=<?php echo $row["Address"] ?> &salary=<?php echo $row["Salary"] ?>&password=<?php echo $row["Password"] ?>&img=<?php echo $row["Photo"] ?>" >  Update My Profile </a>&nbsp &nbsp &nbsp &nbsp &nbsp</button></td>

</tr>
<?php
}
?>




</table>
</body>
</html>