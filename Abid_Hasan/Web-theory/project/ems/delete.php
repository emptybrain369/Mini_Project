<?php

session_start();
$con=mysqli_connect('localhost','root', '','ems');

$id=$_GET['id'];

 
    $sql="DELETE FROM employee WHERE id='$id'";
    $res=mysqli_query($con,$sql);

     if($res){
        header("Location:viewemp.php");
     }

?>

