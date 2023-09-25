<?php
$con=mysqli_connect('localhost','root', '','registration');
$fname=$_POST['fullname'];
$nd=$_POST['nid'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$contract=$_POST['cn'];
$gender=$_POST['gender'];
$district=$_POST['dis'];
echo "Full Name: ".$fname."<br><br>";
echo "NID/BID: ".$nd."<br><br>";
echo "Email: ".$email."<br><br>";
echo "Date of Birth: ".$dob."<br><br>";
echo "Age: ".$age."<br><br>";
echo "Contract: ".$contract."<br><br>";
echo "Gender: ".$gender."<br><br>";
echo "District: ".$district."<br><br>";
$sql="INSERT INTO `reg`(`Name`, `NID/BID`, `Email`, `Date of Birth`, `Age`,`Contract`, `Gender`, `District`)
 VALUES ('$fname','$nd','$email','$dob','$age','$contract','$gender','$district')";

mysqli_query($con,$sql);
echo "Data inserted successfully";
?>