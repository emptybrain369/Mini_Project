<?php
if(isset($_POST['add_info'])){
    $name=$_POST['name'];
    $imageName = $_FILES['upload_img']['name'];
    $image_tmpName = $_FILES['upload_img']['tmp_name'];
    move_uploaded_file($image_tmpName,"images/".$imageName);
    //print_r($_FILES);
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter your name"><br><br>
        <input type="file" name="upload_img"><br><br>
        <input type="submit" name="add_info" value="Submit"><br><br>
    </form>
     <img src="images/<?php echo  $imageName; ?>" alt="" width="150px" height="150px">
</body>
</html>