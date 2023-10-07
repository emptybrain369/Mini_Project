<?php

session_start();
$con=mysqli_connect('localhost','root', '','ems');

$id=$_GET['id'];

 
$sql="DELETE FROM project WHERE id='$id'";
    $res=mysqli_query($con,$sql);

     if($res){
        header("Location:prostatus.php");
     }



?>
