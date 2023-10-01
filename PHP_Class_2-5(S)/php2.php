<?php
$title="Home Page";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
  <h2 align="center"><?php echo $title; ?></h2>  
  <form action="" method="POST">
    <input type="text" placeholder="Enter your name" name="name"><br><br>
    <input type="email" placeholder="Enter your email" name="email"><br><br>
    <input type="submit" name="submit" value="Send"><br><br>
  </form>
  <!-- Table -->
  <table border="1" cellspacing="0" cellpadding="15px">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Remarks</th>
    </tr>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $email; ?></td>
        <td></td>
    </tr>
    </table>
</body>
</html>