<?php

session_start();

$con = mysqli_connect("localhost","root","","ems");



     $eusername = $_POST['ename'];
    $epass = $_POST['epass'];

    $query = "SELECT * FROM employee where Name = '$eusername' && Password = '$epass'";

    $res = mysqli_query($con,$query);
   
    $num = mysqli_num_rows($res);

     if( $num == 1){

        $_SESSION['username'] = $eusername;
         header("Location:em_myprofile.php");

        
     }
      else{
          header("Location:employee_login.php");
       }


?>