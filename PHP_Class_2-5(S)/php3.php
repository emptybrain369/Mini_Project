<?php
$fname="Md";
$middleName="Giash";
$lname="Uddin";
printf('My name is %3$s %1$s %2$s',$fname,$middleName,$lname);
echo "<br>";
printf('The binary equivalent is %1$d is %1$b',50);
echo "<br>";
date_default_timezone_set("Asia/Dhaka");
echo time()."<br>";
echo microtime(true);
echo "<br>";
echo microtime(false);
echo "<br>";
echo date("d-m-Y");
echo "<br>";
// String to Time
$date="15 March,2023";
echo date("l", strtotime($date));
?>