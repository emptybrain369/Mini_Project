<?php
//Define class
class User{
    // Define Property
    private $con;
    // Constructor for connection
    public function __construct(){
        define("HOSTNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","test");
       $this->con= mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
    }
    // Data Insert
     public function add_user($data){
     $name=$data['name'];
     $email=$data['email'];
     $password=$data['password'];
     $query="INSERT INTO `user`(`id`,`name`,`email`,`password`) VALUES(null,' $name',' $email','$password')";
     $fire=mysqli_query($this->con,$query);
     if($fire){
        header("Location: index.php");//Redirect
     }
    }
    // User Data Show
    public function all_user(){
        return $data=mysqli_query($this->con,"SELECT * FROM `user`");
    }
    // Delete User
    public function delete_user($uid){
        $query="DELETE FROM `user` WHERE `id`='$uid'";
       $fire= mysqli_query($this->con,$query); 
        if($fire){
            header("Location: index.php");
        }
    }
    // Edit User
    public function edit_user($uid){
      return  mysqli_query($this->con,"SELECT * FROM `user` WHERE `ID`='$uid'");
    }
    // Update User
    public function update_user($data){
        $id=$data['id'];
        $name=$data['name'];
        $email=$data['email'];
        $password=$data['password'];
        $query="UPDATE`user` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id`='$id'";
        $fire=mysqli_query($this->con,$query);
        if($fire) header("Location: index.php");
    }
}
?>