<?php

session_start();
if (!isset($_SESSION['username'])){
         header("Location:admin_login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1 align="center"><?php echo $_SESSION['username']?> Page</h1>
    <nav align="center">
        <a href="viewemp.php">View Employee</a> &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="addemp.php">Add Employee</a>&nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="assignpro.php">Assign Project</a> &nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="prostatus.php">Project Status</a>&nbsp &nbsp &nbsp &nbsp &nbsp
        <a href="logout.php">Logout</a> &nbsp &nbsp &nbsp &nbsp &nbsp
    </nav>
    <br> 
    <h2 align="center">Add New Employee</h2> <br> 
    <form name="form1" action= "" method="post" onsubmit="return check()" enctype="multipart/form-data" align="center">
        Id :
        <input type="number" name="eid"> <br> <br>
        Name :
        <input type="text" name="en"> <br> <br>
        
        Email :
        <input type="email" name="eem"> <br> <br>
         
        Gender : &nbsp
        Male: <input type="radio" name="egen" value="Male"> &nbsp
       Female: <input type="radio" name="egen" value="Female"><br> <br>
        
        Contact Number :
        <input type="number" name="ecn"> <br> <br>
        Nid Number :
        <input type="number" name="enid"> <br> <br>
        Address :
        <input type="text" name="eaddr"> <br> <br>
        Salary :
        <input type="number" name="esalary"> <br> <br>
        Password :
        <input type="password" name="epass"> <br> <br>
        Upload your Photo :
        <input type="file" name="ephoto"> <br> <br>
        <input type="submit" name="submit" value="Register">
    </form>

    <script>
        function check(){
            var id = document.form1.eid.value;
            var name = document.form1.en.value;
            var email = document.form1.eem.value;
            var gender = document.form1.egen.value;
            var contact = document.form1.ecn.value;
            var nid = document.form1.enid.value;
            var address = document.form1.eaddr.value;
            var salary = document.form1.esalary.value;
            var password = document.form1.epass.value;
            var photo = document.form1.ephoto.value;

            if(id==""){

            alert("id can not be empty");
            return false;

             }

            if(name==""){

             alert("Name can not be empty");
             return false;

            }

            if(email==""){

            alert("Email can not be empty");
            return false;

             }

             if(gender==""){

             alert("gender can not be empty");
             return false;

             }

             if(contact==""){

             alert("contact can not be empty");
             return false;

              }

              if(nid==""){

              alert("nid can not be empty");
               return false;

              }

              if(address==""){

               alert("address can not be empty");
              return false;

              }

              if(salary==""){

             alert("salary can not be empty");
             return false;

               }

              if(password==""){

              alert("password can not be empty");
              return false;

               }

              if(photo==""){

               alert("photo can not be empty");
                return false;

                }





        }
    </script>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root', '','ems');

if (isset( $_POST['submit'])) {
$id=$_POST['eid'];
$name=$_POST['en'];
$email=$_POST['eem'];
$gender=$_POST['egen'];
$contact=$_POST['ecn'];
$nid=$_POST['enid'];
$address=$_POST['eaddr'];
$salary=$_POST['esalary'];
$password=$_POST['epass'];

$photo=$_FILES['ephoto']['name'];
$photocopy =$_FILES['ephoto']['tmp_name'];
move_uploaded_file($photocopy,"images/$photo");


$sql="insert into employee(id,Name,Email,Gender,Contact,Nid,Address,Salary,Password,Photo) values ('$id','$name','$email','$gender','$contact','$nid','$address','$salary','$password','$photo')";
mysqli_query($con,$sql);

}
?>


 

         









             
            
            
            
            
            
            
            
            
            