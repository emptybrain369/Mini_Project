<?php
include "Classes/User.php";
$user1=new User();

$id = $_GET['id'];
$user1->delete_user($id);
?>