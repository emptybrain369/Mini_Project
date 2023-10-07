<?php
$con = new mysqli("localhost","root","","batch06_php");
function insert($formData){
    $name = $formData['name'];
    $fName = $formData['fName'];
    $mName = $formData['mName'];
    $email = $formData['email'];
    $status = $formData['status'];
       if($name==""){
           echo '<div class="alert alert-warning"><strong>Error: </strong>Name field is empty</div>';
       }
       else if($fName==""){
           echo '<div class="alert alert-warning"><strong>Error: </strong>Father name field is empty</div>';
       }
       else if($mName==""){
           echo '<div class="alert alert-warning"><strong>Error: </strong>Mother name field is empty</div>';
       }
       else if($email==""){
           echo '<div class="alert alert-warning"><strong>Error: </strong>Email field is empty</div>';
       }
       else if($status==""){
           echo '<div class="alert alert-warning"><strong>Error: </strong>Status field is empty</div>';
       }
    else{
        $checkEmail=emailcheck($email);
        if($checkEmail == true){
            echo '<div class="alert alert-warning"><strong>Error: </strong>Already Exist</div>';
        }
        else{   
        global $con;
        $stm = "INSERT INTO tbl_student(name,fName,mName,email,status)VALUES('$name','$fName','$mName','$email','$status')";
        $check = $con->query($stm);
        if($check==true){
       echo '<div class="alert alert-success"><strong>Success: </strong>Data Saved</div>';
      }
      else{
          echo '<div class="alert alert-danger"><strong>Error: </strong>Data Not Saved</div>';
      }
        }
    }
}

function show(){
    global $con;
    $data = $con->query("SELECT * FROM tbl_student");
    return $data;   
}

function emailcheck($email){
    global $con;
    $data = $con->query("SELECT * FROM tbl_student WHERE email='$email'");
    if($data->num_rows > 0) {
        return true;
    }
    else{
        return false;
    }
}

function findStudent($id){
    global $con;
    $data = $con->query("SELECT * FROM tbl_student WHERE student_id='$id'");
    $all = $data->fetch_assoc();
    return $all;
}

function editStudent($alldata, $id){
    global $con;
    $name = $alldata['name'];
    $fName = $alldata['fName'];
    $mName = $alldata['mName'];
    $email = $alldata['email'];
    $status = $alldata['status'];
    $data = $con->query("UPDATE tbl_student SET name='$name',fName='$fName',mName='$mName',email='$email',status='$status' WHERE student_id='$id'");
    if($data){
        header("location:show.php");
    }
}

function deleteStudent($id){
    global $con;
    $data = $con->query("DELETE FROM tbl_student WHERE student_id='$id'");
    if($data){
        header("location:show.php");
    }
}

function active($id){
    global $con;
    $data = $con->query("UPDATE tbl_student SET status='1' WHERE student_id='$id'");
    if($data){
        header("location:show.php");
    }
}

function inactive($id){
    global $con;
    $data = $con->query("UPDATE tbl_student SET status='2' WHERE student_id='$id'");
    if($data){
        header("location:show.php");
    }
}
?>