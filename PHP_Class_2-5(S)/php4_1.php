<?php
if(isset($_POST['submit'])){
    $f_name=$_POST['fname'];
    $l_name=$_POST['lname'];
    $c_name=$_POST['cname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- CSS files -->
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Let's Start a Conversation</h1>
        </div>
        <div class="col-md-6">
         <h2>Ask how we can help you:</h2>
         <h5>See our platform in action</h5>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
         <h5>Master performance marketing</h5>
         <p>Form <a href="#">TUNE Academy Courses</a> Lorem ipsum <a href="#">research</a>  dolor sit amet <a href="#">insights</a> consectetur, adipisicing elit. Aut, expedita. Ipsam in illum doloremque? Voluptas.</p>
         <h5>Explore life at TUNE</h5>
         <p> Search <a href="#">Open positions</a> Lorem ipsum dolor sit amet consectetur adipisicing elit. Est magni veritatis eius.</p>
         <h2>Points of Contact</h2>
         <h4>us|TUNE</h4>
         <p>11350McMormickRd,200</p>
         <p>HuntValley,3344</p>
         <h5>Information and Sales</h5>
         <a href="#">abxcxg@une.com</a>
         <h5>Support</h5>
         <a href="#">abxg@une.com</a>
         <h5>Verification and Employment</h5>
         <a href="#">abeqrqwxg@une.com</a>
         <h2>Additional Office Locations</h2>
         <h5>Germany</h5>
         <p>Dhaga,35356</p>
        </div>
        <div class="col-md-6">
         <h6>Please note:all fields are required.</h6>
         <form action="" method="POST">
            First Name<br><input type="text" name="fname"><br>
            Last Name<br><input type="text" name="lname"><br>
            Company Name<br><input type="text" name="cname"><br>
            Company Email<br><input type="text" id="email"><br>
            Job Title:<br><input type="text" id="jtitle"><br>
            Country:<br>Select:
            <select>
               <option value="Bangladesh">Bangladesh</option> 
               <option value="Japan">Japan</option> 
               <option value="India">India</option> 
            </select><br>
            Business Type:<br>Select:
            <select>
               <option value="personal">Personal</option> 
               <option value="multi-national">Multi-Natoinal</option> 
               <option value="company">Company</option> 
            </select><br>
            Comments<br><input type="text"><br>
            <input type="checkbox">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, beatae the <a href="#">privacy 
            policy</a><br>
            <button name="submit">SEND MESSAGE</button>
        </form>
        </div>
    </div>
    <br><br>
    <table border="1" cellspacing="0" cellpadding="15px">
         <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Company Name</th>
        </tr>
       <tr>
            <td><?php echo $f_name;?></td>
            <td><?php echo $l_name;?></td>
            <td><?php echo $c_name;?></td>
       </tr>
   </table>
</div>

    <!-- JS files -->
    <!-- Jquery JS -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Main JS -->
    <script src="js/app.js"></script>
</body>
</html>