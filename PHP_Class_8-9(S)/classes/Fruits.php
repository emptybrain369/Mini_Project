<?php
include "config/config.php";
session_start();
class Fruits extends Connection{
public function add_fruit($allData){
  print_r($_allData);
    $fruitName=$allData['fruit_name'];
    $fruitQty=$allData['fruit_qty'];
    $fruitPrice=$allData['fruit_price'];
    $fruitImgName=$_FILES['fruit_img']['name'];
    $fruitTmpName=$_FILES['fruit_img']['tmp_name'];
    $sql="INSERT INTO `fruits`(`id`, `f_name`, `f_qty`, `f_img`, `f_price`) VALUES ('NULL','$fruitName','$fruitQty','$fruitImgName','$fruitPrice')";
    $result=$this->con->query($sql);
    if($result){
        move_uploaded_file($fruitTmpName,"upload/".$fruitImgName);
        header("Location php8_2.php");
        $_SESSION['message']="Data Inserted Successfully";
    }else{
        $_SESSION['message']="Data Not Inserted Successfully"; 
    }
  
  
}
public function showData(){
  return $this->con->query("SELECT * FROM `fruits`");
}
public function deleteItem($uid){
 $result= $this->con->query("DELETE FROM `fruits` WHERE `id`='$uid'");
 if($result){
  header("Location: php8_2.php");
 }
}
}
?>