<?php

session_start();

$con = mysqli_connect("localhost","root","","ems");



     $ausername = $_POST['auser'];
    $apass = $_POST['apass'];

    $query = "SELECT * FROM admin where username = '$ausername' && password = '$apass'";

    $res = mysqli_query($con,$query);
   
    $num = mysqli_num_rows($res);

     if( $num == 1){

        $_SESSION['username'] = $ausername;
         header("Location:viewemp.php");

        
     }
      else{
          header("Location:admin_login.html");
       }


?>

